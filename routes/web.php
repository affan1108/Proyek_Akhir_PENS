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
    $data = Hijab::paginate(4);
    $carts = Keranjang::all();
    return view('home', compact('data', 'carts'));
    // return view('home');
});

Route::get('/dashboard', function () {
    $data = Hijab::paginate(4);
    $carts = Keranjang::all();
    return view('dashboard', compact('data', 'carts'));
})->middleware(['auth', 'verified']);

// Route::get('/detailhijab/{id}', function ($id) {
//     $data = Hijab::find($id);
//     return view('detailhijab', compact('data'));
// });

Route::get('/bantuan', [App\Http\Controllers\MenuController::class, 'bantuan'])->name('bantuan');
require __DIR__.'/auth.php';
