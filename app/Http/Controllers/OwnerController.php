<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\KostTerjualPerbulan;

class OwnerController extends Controller
{
    public function dashboard(KostTerjualPerbulan $chart)
    {
        return view('owner.dashboard', ['chart' => $chart->build()]);
    }
}
