<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KelolaOwnerController extends Controller
{
    public function index()
    {
        return view('admin.kelolaowner');
    }

    public function kelolaowner()
    {
        $owners = auth()->user();
        $owners = User::where('id', '!=',  $owners->id)
            ->where('role',  'owner')
            ->get();
        return view('admin.kelolaowner', compact('owners'));
    }

    public function show(User $owner)
    {
        $owner = User::find($owner);

        if(!$owner){
            return redirect()->route('owner.show')->with('error','User tidak ditemukan');
        }
        return view('owner.show', ['user' => $owner]);
    }
}
