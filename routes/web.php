<?php

use App\Models\Listing;
use Faker\Provider\Lorem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

use App\Http\Controllers\typingController;

use App\Http\Controllers\typingTest;


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

Route::get('/',[listingController::class,'index']);

Route:: get('/listings/create',[ListingController::class,'create'])->middleware('auth');
Route::post('/listings',[ListingController::class,'store'])->middleware('auth');
Route::get('/listings/{listing}/edit',[ListingController::class,'edit'])->middleware('auth');
Route::put('/listings/{listing}',[ListingController::class,'update'])->middleware('auth');
Route::delete('/listings/{listing}',[ListingController::class,'destroy'])->middleware('auth');
Route::get('/listings/{listing}',[ListingController::class,'show']);
Route::get('/register',[UserController::class,'create'])->middleware('guest');
Route::post('/users',[UserController::class,'store']);
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate',[UserController::class,'authenticate']);

//typing test
Route::get('/typingtest',[typingController::class,'typingTest'])->middleware('auth');
Route::post('/typing',[typingController::class,'typingSubmit']);




