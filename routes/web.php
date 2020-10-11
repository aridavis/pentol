<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', function () {
    return view('index');
});

Route::get('/concert-detail', function() {
    return view('concert-detail');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('ping', function() {
        return response()->json(['data' => 'pong'], 200);
    });

    Route::get('/watch', function() {
        return view('concert');
    });

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::get('/profile', function() {
        return view('profile');
    });

    Route::get('/my-ticket', function() {
        return view('my-ticket');
    });
});
