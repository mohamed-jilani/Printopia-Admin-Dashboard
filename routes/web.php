<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReclamController;
use App\Http\Controllers\ProduitsController;


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
Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('dash/dashboard');
});

Route::get('/dashboard', function () {
    return view('dash/dashboard');
});

Route::get('/produits', [ProduitsController::class,'index']);


Route::get('/clients',[ClientController::class,'index']);


Route::get('/reclammation', [ReclamController::class,'index']);

Route::get('/webupdate', function () {
    return view('dash/webupdate');
});

Route::get('/stock', [StockController::class,'index']);

Route::get('/user', function () {
    return view('dash/user');
});

Route::get('/master', function () {
    return view('dash/layouts/master');
});
/*




*/

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
