<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function approval()
    {
        return view('approval_owner');
    }
}
