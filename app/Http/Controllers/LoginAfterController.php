<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAfterController extends Controller
{
    /**
     * Route to Home
     */
    public function index()
    {
        return view('login_after');
    }
}