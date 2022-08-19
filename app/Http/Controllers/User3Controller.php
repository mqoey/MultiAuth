<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User3Controller extends Controller
{
    public function index(){
        return view('user3.index')
        ->with('role', Auth::user()->role);
    }
}
