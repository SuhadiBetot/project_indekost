<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerKosController extends Controller
{
    public function data_kos()
    {
        return view('owner.data_kos');
    }
}
