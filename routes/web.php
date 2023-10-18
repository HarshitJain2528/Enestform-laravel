<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [ViewController::class,'index']);
Route::get('/login', [ViewController::class,'login'])->name('login');
Route::get('/contact',[ViewController::class,'contact']);
Route::get('/buynow/{id}',[ViewController::class,'buynow']);
Route::get('/addproduct/{id}', [ViewController::class,'addproduct']);
Route::post('/addtocart',[ViewController::class,'addToCart'])->name('AddToCart');
Route::post('/contact-us',[ViewController::class,'contact_us'])->name('contact.us');

Route::post('/postRegistration',[AuthController::class,'postRegistration'])->name('signup.data');
Route::post('/postLogin',[AuthController::class,'postLogin'])->name('login.data');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');