<?php

use App\Http\Controllers\MemberlistController;
use App\Http\Controllers\PaymentController;
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

Route::get('/memberlist', [MemberlistController::class, 'index'])->name('MemberList/daftarMemberList');
Route::get('/payment', [PaymentController::class, 'index'])->name('payment/daftarPayment');
Route::get('/home', function () {
    return view('home');
});
