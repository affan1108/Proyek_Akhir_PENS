<?php

use Illuminate\Support\Facades\Route;
use App\Models\Hijab;
use App\Models\Keranjang;

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
    $data = Hijab::all();
    $carts = Keranjang::all();
    return view('home', compact('data', 'carts'));
    // return view('home');
});

Route::get('/dashboard', function () {
    $data = Hijab::all();
    $carts = Keranjang::all();
    return view('dashboard', compact('data', 'carts'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
