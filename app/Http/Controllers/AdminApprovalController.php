<?php

namespace App\Http\Controllers;

use App\Models\OwnerDataKosts;
use App\Models\User;
use Illuminate\Http\Request;

class AdminApprovalController extends Controller
{
    public function approval()
    {
        // return view('admin.approval');
        $datakosts = OwnerDataKosts::with('user')->get();
        return view('admin.approval', compact('datakosts'));
    }

    public function detail(OwnerDataKosts $ownerDataKosts)
    {
        $ownerDataKosts->user;
        return view('admin.detail_approval', compact('ownerDataKosts'));
    }

    public function updateStatus(Request $request, OwnerDataKosts $ownerDataKosts)
    {
        $ownerDataKosts->update([
            'status' => $request->status,
        ]);

        return redirect()->route('app-admin');
    }

    public function destroy(OwnerDataKosts $ownerDataKosts)
    {
        $ownerDataKosts->delete();
        return redirect()->back();
    }
}
