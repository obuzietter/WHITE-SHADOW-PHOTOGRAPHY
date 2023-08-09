<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\ReviewController;
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
Route::get('/gallery', [ImageController::class, 'getImages']);
Route::view('/contact', 'contact');  

//route for sending reviews to the database
Route::post("/review", [ReviewController::class,'sendData']);
