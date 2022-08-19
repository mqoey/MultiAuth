<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User1Controller extends Controller
{
    public function index()
    {
        return view('user1.index')
            ->with('role', Auth::user()->role);
    }
}
