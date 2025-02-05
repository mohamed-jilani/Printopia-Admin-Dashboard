<?php

use App\Http\Middleware\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UsersController;
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
// Route::get('/', function () {return view('auth/login');});

// Route::get('/dash', function () {return view('dash/dashboard');});

// route::get('/users',[UsersController::class,'index']);

// Route::get('/produits', [ProduitsController::class,'index']);

// Route::get('/location',function(){return view('dash/location');});

// Route::get('/userDetails/{id}',[UsersController::class,'show'])->name('user');

// Route::get('/reclammation', [ReclamController::class,'index']);

// Route::get('/webupdate', function () {return view('dash/webupdate');});

// Route::get('/stock', [StockController::class,'index']);

// Route::get('/user', function () {return view('dash/user');});

// Route::get('/master', function () {return view('dash/layouts/master');});
/*




*/

Auth::routes(['verify' => true]);

Route::middleware(['auth','user.role:admin'])->group(function(){

    Route::get('/', function () {return view('dash/dashboard');});

    Route::get('/dash', function () {return view('dash/dashboard');});


    Route::get('/produits', [ProduitsController::class,'index'])->name('produits');
    
    Route::get('/produitsdetails/{id}', [ProduitsController::class,'show'])->name('produit');

    Route::get('/addProduit',[ProduitsController::class,'create']);
    
    Route::get('/deleteProduit/{id}',[ProduitsController::class,'destroy']);

    Route::post('/products', [ProduitsController::class,'store'])->name('products.store');


    
    Route::get('/location',function(){return view('dash/location');});




    route::get('/users',[UsersController::class,'index'])->name('users');

    Route::get('/userDetails/{id}',[UsersController::class,'show'])->name('user');

    Route::get('/userDelete/{id}',[UsersController::class,'destroy']);



    Route::get('/reclamDetails/{id}',[ReclamController::class,'show'])->name('reclamId');

    Route::get('/reclamDelete/{id}',[ReclamController::class,'destroy']);

    Route::get('/reclammation', [ReclamController::class,'index'])->name('reclam');



    Route::get('/webupdate', function () {return view('dash/webupdate');});

    Route::get('/stock', [StockController::class,'index']);

    Route::get('/user', function () {return view('dash/user');});

    Route::get('/master', function () {return view('dash/layouts/master');});
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
