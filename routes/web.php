<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\cart;
use App\Http\Controllers\paidController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $homecafe = DB::table('product') -> get();
    return view('dashboard',compact('homecafe'));
})->name('dashboard');

Route::get('/mycart', [cart::class, 'index']) ->name('cart');
Route::post('/mycart', [cart::class, 'addCart']);
Route::delete('/mycart/delete/{id}', [cart::class, 'delete']);

Route::get('/paid', [paidController::class, 'index']);
Route::delete('/paid/clear', [paidController::class, 'ClearCart']);