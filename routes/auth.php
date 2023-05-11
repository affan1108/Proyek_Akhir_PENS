<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    // Route::get('home', [App\Http\Controllers\MenuController::class, 'home'])
    //             ->name('home');
    
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');

    Route::get('/catalog', [App\Http\Controllers\MenuController::class, 'catalog'])->name('catalog');
});

Route::middleware('auth')->group(function () {
    Route::get('/bantuan', [App\Http\Controllers\MenuController::class, 'bantuan'])->name('bantuan');
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
    Route::get('/dashboard/katalog', [App\Http\Controllers\MenuController::class, 'katalog'])->name('katalog');
    Route::get('/hijab', [App\Http\Controllers\CategoryController::class, 'hijab'])->name('hijab');
    Route::get('/detailhijab/{id}', [App\Http\Controllers\DetailController::class, 'hijab'])->name('detailhijab');
    Route::get('/deleteinvoice/{id}', [App\Http\Controllers\InvoiceController::class, 'deleteinvoice'])->name('deleteinvoice');
    // Route::get('/home/{id}', [App\Http\Controllers\InvoiceController::class, 'editinvoice'])->name('home');
    Route::get('/invoice', [App\Http\Controllers\InvoiceController::class, 'invoice'])->name('invoice');
    Route::get('/invoicecart', [App\Http\Controllers\InvoiceController::class, 'index'])->name('invoicecart');
    Route::get('/dashboard/pesanansaya', [App\Http\Controllers\MenuController::class, 'pesanansaya'])->name('pesanansaya');
    Route::get('/dashboard/riwayatpesanan', [App\Http\Controllers\MenuController::class, 'riwayatpesanan'])->name('riwayatpesanan');
    Route::get('/dashboard/penilaianpesanan', [App\Http\Controllers\MenuController::class, 'penilaianpesanan'])->name('penilaianpesanan');
    Route::get('/dashboard/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');
    
    
    
    
    Route::get('/voucher', [App\Http\Controllers\VoucherController::class, 'voucher'])->name('voucher');
    Route::post('/pilihvoucher/{id}', [App\Http\Controllers\InvoiceController::class, 'pilihvoucher'])->name('pilihvoucher');
    
    Route::get('/invoice/cart/delete/{id}', [App\Http\Controllers\KeranjangController::class, 'deleteAndUpdate']);
    Route::get('/ekspedisi', [App\Http\Controllers\MenuController::class, 'ekspedisi'])->name('tables.ekspedisi');
    Route::post('/addekspedisi', [App\Http\Controllers\Table\EkspedisiController::class, 'insertekspedisi'])->name('insertekspedisi');
    Route::get('/keranjang', [App\Http\Controllers\KeranjangController::class, 'index'])->name('keranjang');
    Route::post('/keranjangpesanan', [App\Http\Controllers\KeranjangController::class, 'update'])->name('keranjangpesanan');
    Route::post('/cart', [App\Http\Controllers\KeranjangController::class, 'cart'])->name('cart');
    Route::post('/keranjang', [App\Http\Controllers\KeranjangController::class, 'keranjang'])->name('keranjang');
    Route::post('/dokumen/get_user', ['as' => 'dokumen.get_user', 'uses' => 'DetailController@get_user']);
    Route::get('/invoice/{id}', [App\Http\Controllers\MenuController::class, 'view']);
    Route::post('/insertongkir', [App\Http\Controllers\OngkirController::class, 'insertongkir'])->name('insertongkir');
    Route::post('/addongkir', [App\Http\Controllers\OngkirController::class, 'addongkir'])->name('addongkir');
    Route::post('/insertinvoice', [App\Http\Controllers\InvoiceController::class, 'insertinvoice'])->name('insertinvoice');
    Route::post('/insertinvoicecart', [App\Http\Controllers\InvoiceController::class, 'insertinvoicecart'])->name('insertinvoicecart');
    Route::get('/editinvoice/{id}', [App\Http\Controllers\InvoiceController::class, 'editinvoice'])->name('editinvoice');
    Route::get('/deletecart/{id}', [App\Http\Controllers\KeranjangController::class, 'deletecart'])->name('deletecart');
    Route::get('/editpesanan/{id}', [App\Http\Controllers\KeranjangController::class, 'editpesanan'])->name('editpesanan');
    Route::post('/updateresi/{id}', [App\Http\Controllers\PaymentController::class, 'updateresi'])->name('updateresi');
    Route::post('/pesananditerima/{id}', [App\Http\Controllers\MenuController::class, 'pesananditerima'])->name('pesananditerima');
    Route::get('/dashboard/pesanansaya/viewpesanan/{id}', [App\Http\Controllers\MenuController::class, 'viewpesanan'])->name('viewpesanan');
    Route::get('/bill', [App\Http\Controllers\MenuController::class, 'bill'])->name('bill');
    Route::get('/billcart/{id}', [App\Http\Controllers\MenuController::class, 'bill_cart'])->name('billcart');
    Route::get('/keranjangbill', [App\Http\Controllers\MenuController::class, 'show'])->name('keranjangbill');
    // Route::get('/pay', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');
    Route::post('/updatekeranjang/{id}', [App\Http\Controllers\KeranjangController::class, 'updatekeranjang'])->name('updatekeranjang');
    Route::get('/deletepesanan/{id}', [App\Http\Controllers\InvoiceController::class, 'deletepesanan'])->name('deletepesanan');
    Route::get('/deleteongkir/{id}', [App\Http\Controllers\OngkirController::class, 'deleteongkir'])->name('deleteongkir');
    Route::get('/nilaipesanan/{id}', [App\Http\Controllers\PaymentController::class, 'nilai'])->name('nilaipesanan');
    Route::get('/batalkanpesanan/{id}', [App\Http\Controllers\PaymentController::class, 'batal'])->name('batalkanpesanan');
    Route::post('/penilaian/{id}', [App\Http\Controllers\PaymentController::class, 'penilaian'])->name('penilaian');
    

    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('/province/{id}/cities', [HomeController::class, 'getCities']);
    Route::post('home', [HomeController::class, 'submit'])->name('submit');

    Route::get('ongkir', [App\Http\Controllers\OngkirController::class, 'index'])->name('ongkir');
    Route::get('/province/{id}/cities', [App\Http\Controllers\OngkirController::class, 'getCities']);
    Route::post('ongkir', [App\Http\Controllers\OngkirController::class, 'submit'])->name('sumbit');

    Route::post('/bill', [App\Http\Controllers\PaymentController::class, 'payment_post']);
// });

// Route::group(['middleware' => ['auth','role:admin']], function () {
    Route::get('/print/{id}', [App\Http\Controllers\MenuController::class, 'print'])->name('print');
    Route::get('/addproduk', [App\Http\Controllers\MenuController::class, 'addproduk'])->name('addproduk');
    Route::post('/kas', [App\Http\Controllers\KasController::class, 'insertkas'])->name('kas');
    Route::get('/deletekas/{id}', [App\Http\Controllers\KasController::class, 'deletekas'])->name('deletekas');
    Route::post('/updatekas/{id}', [App\Http\Controllers\KasController::class, 'updatekas'])->name('updatekas');
    Route::post('/updatewarna/{id}', [App\Http\Controllers\Table\WarnaController::class, 'updatewarna'])->name('updatewarna');
    Route::get('/dashboard/daftarproduk', [App\Http\Controllers\MenuController::class, 'daftarproduk'])->name('daftarproduk');
    Route::get('/dashboard/daftarpesanan', [App\Http\Controllers\MenuController::class, 'daftarpesanan'])->name('daftarpesanan');
    Route::get('/dashboard/daftarpenilaian', [App\Http\Controllers\MenuController::class, 'daftarpenilaian'])->name('daftarpenilaian');
    Route::get('/dashboard/user', [App\Http\Controllers\UserController::class, 'user'])->name('user');
    Route::post('/addwarna', [App\Http\Controllers\Table\WarnaController::class, 'insertwarna'])->name('insertwarna');
    Route::get('/deletewarna/{id}', [App\Http\Controllers\Table\WarnaController::class, 'deletewarna'])->name('deletewarna');
    Route::get('/ukuran', [App\Http\Controllers\MenuController::class, 'ukuran'])->name('tables.ukuran');
    Route::post('/addukuran', [App\Http\Controllers\Table\UkuranController::class, 'insertukuran'])->name('insertukuran');
    Route::get('/deleteukuran/{id}', [App\Http\Controllers\Table\UkuranController::class, 'deleteukuran'])->name('deleteukuran');
    Route::get('/edit/{id}', [App\Http\Controllers\MenuController::class, 'edit'])->name('edit');
    Route::get('/view/{id}', [App\Http\Controllers\DetailController::class, 'view'])->name('view');
    Route::post('/update/{id}', [App\Http\Controllers\DetailController::class, 'update'])->name('update');
    Route::get('/deleteproduk/{id}', [App\Http\Controllers\DetailController::class, 'delete'])->name('delete');
    Route::put('/updateprofile', [App\Http\Controllers\ProfileController::class, 'updateprofile'])->name('updateprofile');
    Route::post('/insert', [App\Http\Controllers\DetailController::class, 'insert'])->name('insert');
    Route::post('/store', [App\Http\Controllers\DetailController::class, 'store'])->name('store');
    Route::get('/dashboard/warna', [App\Http\Controllers\MenuController::class, 'warna'])->name('tables.warna');
    Route::get('/dashboard/report', [App\Http\Controllers\MenuController::class, 'report'])->name('report');
    Route::get('/dashboard/payment', [App\Http\Controllers\MenuController::class, 'payment'])->name('tables.payment');
    Route::get('/deleteuser/{id}', [App\Http\Controllers\UserController::class, 'deleteuser'])->name('deleteuser');
    Route::get('/deletepayment/{id}', [App\Http\Controllers\PaymentController::class, 'deletepayment'])->name('deletepayment');
});
