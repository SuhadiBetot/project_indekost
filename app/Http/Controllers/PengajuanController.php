<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    public function pengajuansewa()
    {
        return view('user.pengajuan_sewa');
    }
}
