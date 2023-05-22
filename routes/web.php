<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Usercontroller;

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
    Route::get('/addproduct', [Admincontroller:: class, 'addproduct']);

    
    

});


Route::prefix('/user')->middleware('auth','verified')->group(function(){
    Route::get('/', [Usercontroller:: class, 'index'])->name('dashboard');
    Route::get('/product',[Usercontroller::class,'product'])->name('product');


});






Route::get('/cart', function () {
    return view('cart');
})->middleware(['auth', 'verified'])->name('cart');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
