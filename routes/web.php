<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::view('/', 'home'); 
Route::view('/about', 'about'); 
Route::view('/gallery', 'gallery'); 
Route::view('/contact', 'contact');  

//route for getting images from the database
Route::get('get-image', [ImageController::class, 'getImages']);
