<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiAdminController extends Controller
{
    public function transaksi()
    {
        return view('admin.transaksi_admin');
    }
}
