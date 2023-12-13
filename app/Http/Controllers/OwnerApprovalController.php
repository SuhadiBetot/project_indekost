<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerApprovalController extends Controller
{
    public function approval()
    {
        return view('owner.approval_owner');
    }
}
