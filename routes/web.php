<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\TelephoneController;
use App\Http\Controllers\FollowUsController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CartController;
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
Route::controller(MenuController::class)->group(function(){
    Route::get('/product.index','index')->name('product.index');
    Route::get('/product.laptop','laptop')->name('product.laptop');
    Route::get('/product.phone','phone')->name('product.phone');
    Route::get('/product.watch','watch')->name('product.watch');
    Route::get('/product.brand/{brand}','brand_phone')->name('product.brand_phone');
    Route::get('/product.brand/laptop/{brand}','brand_laptop')->name('product.brand_laptop');
    Route::get('/product.brand/watch/{brand}','brand_watch')->name('product.brand_watch');
    Route::get('/product.brand/all/{brand}','brand_allproduct')->name('product.brand_all');
    Route::get('/product.search','search')->name('product.search');
    Route::get('/product.contact','product_contact')->name('product.contact');
    Route::get('/product.cart/{cart}','cart')->name('product.cart');

});
Route::controller(CartController::class)->group(function(){
    Route::post('/product.cart','store')->name('product.store');
    Route::get('/product.order','index')->name('order.index');
    Route::get('/product.order/{cart}','show')->name('order.show');
    Route::Delete('/product.order/{cart}','destroy')->name('cart.delete');
});
Route::controller(FeedbackController::class)->group(function(){
    Route::post('/product.contact','store')->name('contact.store');
    Route::get('/feedback.index','index')->name('feedback.index');
    Route::delete('/feedback.delete/{feedback}','destroy')->name('feedback.delete');
});
Route::controller(TelephoneController::class)->group(function(){
    Route::get('/telephone.index','index')->name('telephone.index');
    Route::get('/telephone.create','create')->name('telephone.create');
    Route::post('/telephone.store','store')->name('telephone.store');
    Route::get('/telephone.edit/{telephone}','edit')->name('telephone.edit');
    Route::post('/telephone.edit/{telephone}','update')->name('telephone.update');
    Route::delete('/telephone.delete{telephone}','destroy')->name('telephone.delete');
});
Route::controller(FollowUsController::class)->group(function(){
    Route::get('/follow_us.index','index')->name('follow_us.index');
    Route::get('/follow_us.create','create')->name('follow_us.create');
    Route::post('/follow_us.store','store')->name('follow_us.store');
    Route::get('/follow_us.edit/{follow_us}','edit')->name('follow_us.edit');
    Route::post('/follow_us.edit/{follow_us}','update')->name('follow_us.update');
    Route::delete('/follow_us.delete/{follow_us}','destroy')->name('follow_us.delete');
});
Route::controller(LocationController::class)->group(function(){
Route::get('/location.index','index')->name('location.index');
Route::get('/location.create','create')->name('location.create');
Route::post('/location.store','store')->name('location.store');
Route::get('/location.edit/{location}','edit')->name('location.edit');
Route::post('/location.edit/{location}','update')->name('location.update');
Route::delete('/location.delete/{location}','destroy')->name('location.delete');
});
Route::get('/index', function () {
    return view('products.product.index');
});
Route::get('/', function () {
    return view('welcome');
});
Route::controller(LogoController::class)->group(function(){
    Route::get('/logo.index','index')->name('logo.index');
    Route::get('/logo.create','create')->name('logo.create');
    Route::post('/logo.store','store')->name('logo.store');
    Route::get('/logo.edit/{logo}','edit')->name('logo.edit');
    Route::post('/logo.edit/{logo}','update')->name('logo.update');
    Route::delete('/logo.delete{logo}','destroy')->name('logo.delete');


});
Route::controller(PhoneController::class)->group(function(){
    //phone
Route::get('/phone.create','create')->name('phone.create');
Route::post('/phone.store','store')->name('phone.store');
Route::get('/phone.index','index')->name('phone.index');
Route::get('/phone.show/{phone}','show')->name('phone.show');
Route::get('/phone.edit/{phone}','edit')->name('phone.edit');
Route::post('/phone.edit/{phone}','update')->name('phone.update');
Route::delete('/phone.delete/{phone}','destroy')->name('phone.delete');
Route::get('/product.detail/{id}','detail')->name('product.detail');

//laptop
Route::get('/laptop.index','laptop_index')->name('laptop.index');
Route::get('/laptop.create','laptop_create')->name('laptop.create');
Route::post('/laptop.store','laptop_store')->name('laptop.store');
Route::get('/laptop.show/{laptop}','laptop_show')->name('laptop.show');
Route::get('/laptop.edit/{laptop}','laptop_edit')->name('laptop.edit');
Route::post('/laptop.update/{laptop}','laptop_update')->name('laptop.update');
Route::delete('laptop.delete/{laptop}','laptop_destroy')->name('laptop.delete');
//watch
Route::get('/watch.index','watch_index')->name('watch.index');
Route::get('/watch.create','watch_create')->name('watch.create');
Route::post('/watch.store','watch_store')->name('watch.store');
Route::get('/watch.show/{watch}','watch_show')->name('watch.show');
Route::get('/watch.edit/{watch}','watch_edit')->name('watch.edit');
Route::post('/watch.update/{watch}','watch_update')->name('watch.update');
Route::delete('watch.delete/{watch}','watch_destroy')->name('watch.delete');
});
Route::controller(SlideController::class)->group(function(){
    Route::get('slide.create','create')->name('slide.create');
    Route::get('slide.index','index')->name('slide.index');
    Route::post('slide.store','store')->name('slide.store');
    Route::get('slide.edit/{slide}','edit')->name('slide.edit');
    Route::post('slide.edit/{slide}','update')->name('slide.update');
    Route::delete('slide.delete/{slide}','destroy')->name('slide.delete');
});
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout','Destroy')->name('admin.logout');
});
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
