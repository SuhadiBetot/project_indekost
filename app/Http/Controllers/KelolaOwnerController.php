<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaOwnerController extends Controller
{
    public function kelolaowner()
    {
        return view('admin.kelolaowner');
    }
}
