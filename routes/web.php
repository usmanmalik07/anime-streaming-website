<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\userctrl;
use App\Http\Controllers\AnimeController;

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


Route::get('/',[FrontController::class,'index'])->name('front.home');
Route::get('/Shop',[userctrl::class,'showShop'])->name('shop');
Route::get('/aboutus',[FrontController::class,'aboutus'])->name('front.aboutus');
<<<<<<< HEAD

=======
Route::get('/contact',[FrontController::class,'contact'])->name('front.contact');
// Route::get('/', function () {
//     return view('login');
// });
>>>>>>> e780b81f383b3c317409763b1f41c39580e30b79
Route::get('/login',[userctrl::class,'indexlogin'])->name('login');
Route::get('/signup',[userctrl::class,'signup'])->name('signup');
Route::post('/signup', 'App\Http\Controllers\userctrl@store');
Route::get('/dashboard', 'App\Http\Controllers\userctrl@viewdashboard');
Route::get('/logout', 'App\Http\Controllers\userctrl@logout');
Route::post('/login', 'App\Http\Controllers\userctrl@login');
Route::get('/dashboard', [userctrl::class, 'printName'])->name('animename');
Route::post('/add-name', [userctrl::class, 'addName'])->name('add.name');
Route::delete('/remove-name/{id}', [userctrl::class, 'removeName'])->name('remove.name');
Route::get('/printItem', [userctrl::class, 'printItem'])->name('print.item');
Route::post('/add-Item', [userctrl::class, 'addItem'])->name('add.Item');
Route::delete('/remove-Item/{id}', [userctrl::class, 'removeName'])->name('remove.Item');
Route::get('/search', [userctrl::class, 'search'])->name("search.name");
Route::post('/shop/addShop', [userctrl::class, 'addItemShop'])->name('shop.addItemShop');
Route::delete('/shop/remove/{id}', [userctrl::class, 'removeItemShop'])->name('shop.removeItemShop');
Route::get('/usershop',[userctrl::class,'showuserShop'])->name('front.usershop');
// Route::group(['middleware' => 'auth'], function () {
//     Route::post('/usershop/buy/{itemId}', [ShopController::class, 'buyItem'])->name('usershop.buyItem');
// });
// Route::get('/checkout', [CheckoutController::class, 'showCheckout'])->name('checkout.show');
// Route::post('/checkout', [CheckoutController::class, 'processCheckout'])->name('checkout.process');


// ...

Route::get('/contact/form', [ContactFormController::class, 'showForm'])->name('contact.form');
Route::post('/contact/submit', [ContactFormController::class, 'submitForm']);




