<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\Sewa;
use Midtrans\Config;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\OwnerDataKosts;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SewaController extends Controller
{
    //

    public function process(Request $request)
    {

        $sewa = Sewa::create([
            'user_id' => Auth::user()->id,
            'owner_data_kosts_id' => $request->owner_data_kosts_id,
            'mulai_kos' => $request->mulai_kos,
            'bulan' => $request->bulan,
            'status' => 'pending',
        ]);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $totalBiaya = $sewa->dataKos->harga * $request->bulan;
        $biayaAdmin = 0.05 * $totalBiaya;
        $totalBiayaAdmin = $totalBiaya + $biayaAdmin;

        $ownerDataKost = OwnerDataKosts::find($request->owner_data_kosts_id);
        if ($ownerDataKost) {
            $ownerDataKost->update([
                'biaya_admin' => $biayaAdmin,
            ]);
        }

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $totalBiayaAdmin,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        $sewa->snap_token = $snapToken;
        $sewa->save();

        return redirect()->route('pengajuan-sewa-checkout', $sewa);
    }

    public function checkout(Sewa $sewa)
    {
        return view('user.pengajuan_sewa',  compact('sewa'));
    }

    public function success(Sewa $sewa)
    {
        // Get the price data from owner_data_kosts_id in the request
        $ownerDataKost = OwnerDataKosts::findOrFail($sewa->owner_data_kosts_id);
        $harga = $ownerDataKost->harga;
        $owner_id = $ownerDataKost->user_id;

        $sewa->update([
            'total_pembayaran' => $harga * $sewa->bulan + ($harga * $sewa->bulan * 0.05),
            'pendapatan_admin' => $harga * $sewa->bulan * 0.05,
            'pendapatan_owner' => $harga * $sewa->bulan,
        ]);

        $owner = User::findOrFail($owner_id);
        $admin = User::findOrFail(2);
        // dd($owner);
        // Increment the 'pendapatan' field for both owner and admin
        $owner->increment('pendapatan', $harga * $sewa->bulan);
        $admin->increment('pendapatan', $harga * $sewa->bulan * 0.05);

        $sewa->status = 'success';
        $sewa->save();

        return view('user.pengajuan_sewa_success',  compact('sewa'));
    }
}
