<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User5Controller extends Controller
{
    public function index(){
        return view('user5.index')
        ->with('role', Auth::user()->role);
    }
}
