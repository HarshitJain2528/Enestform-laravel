<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Define a route to display the home page
Route::get('/', [ViewController::class, 'index']);

// Define a route to display the login page and name it 'login'
Route::get('/login', [ViewController::class, 'login'])->name('login');

// Define a route to handle the contact page
Route::get('/contact', [ViewController::class, 'contact']);

// Define a route to buy a product by its ID
Route::get('/buynow/{id}', [ViewController::class, 'buynow']);

// Define a route to add a product by its ID
Route::get('/addproduct/{id}', [ViewController::class, 'addproduct']);

// Define a route to handle adding a product to the cart
Route::post('/addtocart', [ViewController::class, 'addToCart'])->name('AddToCart');

// Define a route to handle user contact
Route::post('/contact-us', [ViewController::class, 'contact_us'])->name('contact.us');

// Define a route to handle user registration
Route::post('/postRegistration', [AuthController::class, 'postRegistration'])->name('signup.data');

// Define a route to handle user login
Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('login.data');

// Define a route to log out the user
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
