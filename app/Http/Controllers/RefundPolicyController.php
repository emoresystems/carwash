<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefundPolicyController extends Controller
{
    public function index()
    {
        return view('refund-policy.index');
    }
}
