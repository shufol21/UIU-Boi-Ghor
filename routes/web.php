<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('/');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('trendings', [App\Http\Controllers\FrontendController::class, 'trending'])->name('trending');
Route::get('academics', [App\Http\Controllers\FrontendController::class, 'academics'])->name('academics');
Route::get('fictionals', [App\Http\Controllers\FrontendController::class, 'fictionals'])->name('fictionals');
Route::get('all-books', [App\Http\Controllers\FrontendController::class, 'allBooks'])->name('all-books');
Route::get('book-category/{id}', [App\Http\Controllers\FrontendController::class, 'categoryWise'])->name('book-category');
Route::get('single-view/{id}', [App\Http\Controllers\FrontendController::class, 'single'])->name('single-view');
Route::get('contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact-us');
Route::post('send-mail', [App\Http\Controllers\ContactController::class, 'sendEmail'])->name('send-mail');
Route::get('audio-book', [App\Http\Controllers\AudiobookController::class, 'index'])->name('audio-book');

//users
Route::get('donate', [App\Http\Controllers\DonateController::class, 'donate'])->name('donate')->middleware('auth');
Route::post('insert-donate', [App\Http\Controllers\DonateController::class, 'insert'])->name('insert-donate')->middleware('auth');
Route::get('exchange', [App\Http\Controllers\ExchnageController::class, 'exchange'])->name('exchange')->middleware('auth');
Route::post('insert-exchange', [App\Http\Controllers\ExchnageController::class, 'insert'])->name('insert-exchange')->middleware('auth');
Route::post('cart-store', [App\Http\Controllers\CartController::class, 'store'])->name('cart-store')->middleware('auth');
Route::get('delete-cart/{id}', [App\Http\Controllers\CartController::class, 'distroy'])->name('delete-cart')->middleware('auth');
Route::get('checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout')->middleware('auth');
Route::post('confirm-order', [App\Http\Controllers\OrderController::class, 'order'])->name('confirm-order')->middleware('auth');
Route::get('rent-view/{id}', [App\Http\Controllers\RentController::class, 'view'])->name('rent-view')->middleware('auth');
Route::post('confirm-rent', [App\Http\Controllers\RentController::class, 'rent'])->name('confirm-rent')->middleware('auth');
Route::get('user-profile', [App\Http\Controllers\FrontendController::class, 'profile'])->name('user-profile')->middleware('auth');
Route::get('user-order-history', [App\Http\Controllers\FrontendController::class, 'orderHistory'])->name('user-order-history')->middleware('auth');
Route::get('user-invoice/{id}', [App\Http\Controllers\FrontendController::class, 'viewInvoice'])->name('user-invoice')->middleware('auth');
Route::get('download-user-invoice/{id}', [App\Http\Controllers\FrontendController::class, 'generateInvoice'])->name('download-user-invoice')->middleware('auth');
Route::get('download/{file}', [App\Http\Controllers\AudiobookController::class, 'download'])->name('download/')->middleware('auth');


Route::middleware(['auth','isAdmin'])->group(function (){
    Route::get('/dashboard', function () {
        return view('admin.index');
     });
     //category_routes
     Route::get('categories',[App\Http\Controllers\CategoryController::class, 'index'])->name('categories');
     Route::get('add-category',[App\Http\Controllers\CategoryController::class, 'addCategory'])->name('add-category');
     Route::post('insert-category',[App\Http\Controllers\CategoryController::class, 'insert'])->name('insert-category');
     Route::get('edit-category/{id}',[App\Http\Controllers\CategoryController::class, 'edit'])->name('edit-category');
     Route::post('update-category/{id}',[App\Http\Controllers\CategoryController::class, 'update'])->name('update-category');
     Route::get('delete-category/{id}',[App\Http\Controllers\CategoryController::class, 'distroy'])->name('delete-category');

     //book_routes
     Route::get('books',[App\Http\Controllers\BookController::class, 'index'])->name('books');
     Route::get('add-book',[App\Http\Controllers\BookController::class, 'addBook'])->name('add-book');
     Route::post('insert-book',[App\Http\Controllers\BookController::class, 'insert'])->name('insert-book');
     Route::get('edit-book/{id}',[App\Http\Controllers\BookController::class, 'edit'])->name('edit-book');
     Route::put('update-book/{id}',[App\Http\Controllers\BookController::class, 'update'])->name('update-book');
     Route::get('delete-book/{id}',[App\Http\Controllers\BookController::class, 'distroy'])->name('delete-book');
     Route::get('donates',[App\Http\Controllers\DonateController::class, 'donates'])->name('donates');
     Route::get('exchanges',[App\Http\Controllers\ExchnageController::class, 'exchanges'])->name('exchanges');
     Route::get('delete-donate/{id}',[App\Http\Controllers\DonateController::class, 'distroy'])->name('delete-donate');
     Route::get('delete-exchange/{id}',[App\Http\Controllers\ExchnageController::class, 'distroy'])->name('delete-exchange');

     //order
     Route::get('orders',[App\Http\Controllers\OrderController::class, 'index'])->name('orders');
     Route::get('view-order/{id}',[App\Http\Controllers\OrderController::class, 'view'])->name('view-order');
     Route::post('update-order',[App\Http\Controllers\OrderController::class, 'update'])->name('update-order');
     Route::get('order-history',[App\Http\Controllers\OrderController::class, 'history'])->name('order-history');
     Route::get('admin-invoice/{id}',[App\Http\Controllers\OrderController::class, 'viewInvoice'])->name('admin-invoice');
     Route::get('download-invoice/{id}',[App\Http\Controllers\OrderController::class, 'generateInvoice'])->name('download-invoice');

     //rent
     Route::get('rents',[App\Http\Controllers\RentController::class, 'index'])->name('rents');
     Route::get('view-rent/{id}',[App\Http\Controllers\RentController::class, 'viewR'])->name('view-rent');
     Route::get('view-rent/{id}',[App\Http\Controllers\RentController::class, 'viewR'])->name('view-rent');
     Route::post('update-rent',[App\Http\Controllers\RentController::class, 'update'])->name('update-rent');
     Route::get('rent-history',[App\Http\Controllers\RentController::class, 'history'])->name('rent-history');

     //audio-book
     Route::get('add-audiobook',[App\Http\Controllers\AudiobookController::class, 'addAudiobook'])->name('add-audiobook');
     Route::post('insert-audiobook',[App\Http\Controllers\AudiobookController::class, 'insert'])->name('insert-audiobook');
     Route::get('audiobooks',[App\Http\Controllers\AudiobookController::class, 'viewAll'])->name('audiobooks');
     Route::get('delete-audiobook/{id}',[App\Http\Controllers\AudiobookController::class, 'destroy'])->name('delete-audiobook');
 });