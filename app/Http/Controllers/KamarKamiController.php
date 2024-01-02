<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OwnerDataKosts;
use App\Http\Controllers\Controller;

class KamarKamiController extends Controller
{
    //

    public function index(){
        $kosts = OwnerDataKosts::all();
        return view('user.kamar_kami', compact('kosts'));
    }

    public function detail(OwnerDataKosts $ownerDataKosts){
        return view('user.detail_kost', compact('ownerDataKosts'));
    }
}
