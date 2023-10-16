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
Route::get('/login', [ViewController::class,'login']);
Route::get('/contact',[ViewController::class,'contact']);
Route::get('/buynow',[ViewController::class,'buynow']);
Route::get('/addproduct', [ViewController::class,'addproduct']);

Route::post('/postRegistration',[AuthController::class,'postRegistration'])->name('post.registration');