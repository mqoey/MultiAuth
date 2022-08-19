<?php

use App\Http\Controllers\User1Controller;
use App\Http\Controllers\User2Controller;
use App\Http\Controllers\User3Controller;
use App\Http\Controllers\User4Controller;
use App\Http\Controllers\User5Controller;
use App\Http\Controllers\User6Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth', 'user1']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard')->with('role', Auth::user()->role);
    })->name('dashboard');

    Route::get('/chat', function () {
        return view('user1.chat')->with('role', Auth::user()->role);
    })->name('chat');

    Route::get('user1', [User1Controller::class, 'index'])->name('user1');
});

Route::group(['middleware' => ['auth', 'user2']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard')->with('role', Auth::user()->role);
    })->name('dashboard');

    Route::get('/calendar', function () {
        return view('user2.calendar')->with('role', Auth::user()->role);
    })->name('calendar');

    Route::get('user2', [User2Controller::class, 'index'])->name('user2');
});

Route::group(['middleware' => ['auth', 'user3']], function () {

    Route::get('/dashboard', function () {
        return view('dashboard')->with('role', Auth::user()->role);
    })->name('dashboard');

        Route::get('/contacts', function () {
            return view('user3.contacts')->with('role', Auth::user()->role);
        })->name('contacts');

    Route::get('user3', [User3Controller::class, 'index'])->name('user3');
});

Route::group(['middleware' => ['auth', 'user4']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard')->with('role', Auth::user()->role);
    })->name('dashboard');

    Route::get('/tasks', function () {
        return view('user4.tasks')->with('role', Auth::user()->role);
    })->name('tasks');

    Route::get('user4', [User4Controller::class, 'index'])->name('user4');
});

Route::group(['middleware' => ['auth', 'user5']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard')->with('role', Auth::user()->role);
    })->name('dashboard');

    Route::get('/products', function () {
        return view('user5.products')->with('role', Auth::user()->role);
    })->name('products');

    Route::get('user5', [User5Controller::class, 'index'])->name('user5');
});

Route::group(['middleware' => ['auth', 'user6']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard')->with('role', Auth::user()->role);
    })->name('dashboard');

    Route::get('/orders', function () {
        return view('user6.orders')->with('role', Auth::user()->role);
    })->name('orders');

    Route::get('user6', [User6Controller::class, 'index'])->name('user6');
});

require __DIR__ . '/auth.php';
