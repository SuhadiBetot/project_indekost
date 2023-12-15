<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanSelengkapnyaController extends Controller
{
    public function detail()
    {
        return view('user.halamanselengkapnya');
    }
}
