<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\cartcontroller;

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

Route::prefix('/admin')->middleware('auth','verified','isAdmin')->group(function(){
    Route::get('/', [Admincontroller:: class, 'index'])->name('admindashboard');
    Route::get('/addproduct', [Admincontroller:: class, 'addproduct'])->name('addproduct');
    Route::post('/store', [Admincontroller:: class, 'productstore'])->name('product.store');
    Route::get('/userdetails', [Admincontroller:: class, 'userdetails'])->name('userdetails');
    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('adminlogout');

    
    

});


Route::prefix('/user')->middleware('auth','verified')->group(function(){
    Route::get('/', [Usercontroller:: class, 'index'])->name('dashboard');
    Route::get('/product',[Usercontroller::class,'product'])->name('product');
    Route::get('/cart',[cartcontroller::class,'cart'])->name('cart');
    Route::get('/userorder',[Usercontroller::class,'userorder'])->name('userorder');
    Route::post('/add',[cartcontroller::class,'addcart'])->name('cart.add');
    Route::get('/delete/{cartid}',[cartcontroller::class,'delete'])->name('deletecart');  

});








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
