<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User2Controller extends Controller
{
    public function index(){
        return view('user2.index')
        ->with('role', Auth::user()->role);
    }
}
