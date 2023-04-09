<?php

use App\Http\Controllers\InvokableController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::post('/contry-data', function () {

    return view('country');
})->middleware('country');


Route::get('/', function () {
    return view('home');
});


Route::get('/contact', InvokableController::class);
