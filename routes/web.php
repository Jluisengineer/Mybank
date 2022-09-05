<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\Search;
use App\Http\Controllers\TransactionsController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/index',function(){
    return view('mybank/index');
});

Route::resource('/customer',CustomersController::class);
Route::resource('/account',AccountController::class);
Route::resource('/transaction',TransactionsController::class);

Route::get('/search',[Search::class,'search'])->name('search.customer');
Route::get('/search/account',[Search::class,'search_account'])->name('search.account');
Route::get('/search/customer',[Search::class,'search_customer_accounts'])->name('search.customerAccount');
Route::get('/search/view',[Search::class,'search_customer_view'])->name('search.customerView');