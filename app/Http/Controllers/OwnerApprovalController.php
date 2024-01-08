<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\Sewa;
use Midtrans\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OwnerApprovalController extends Controller
{
    public function approval()
    {

        $sewa = Sewa::with('user', 'dataKos')->get();
        return view('owner.approval_owner', compact('sewa'));
    }

    public function konfirmasi(Sewa $sewa)
    {
        $sewa->status = 'sudah dikonfirmasi';
        $sewa->save();
        return redirect()->back();
    }
    public function tolak(Sewa $sewa)
    {
        $sewa->status = 'sudah tertolak';
        $sewa->save();
        return redirect()->back();
    }
}
