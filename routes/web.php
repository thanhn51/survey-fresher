<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\SurveyController;
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

//Route::get('/', function () {
//    return redirect();
//});

Route::get('/food/',[FoodController::class,'getAllFood'])->name('food');
Route::get('/selectFood/{id?}',[FoodController::class,'selectFood'])->name('selectFood');
Route::get('/pet',[PetController::class,'getAllPet'])->name('pet');
Route::get('/selectPet/{id?}',[PetController::class,'selectPet'])->name('selectPet');
Route::post('/',[SurveyController::class,'getEmail'])->name('getEmail');
Route::get('/',[SurveyController::class,'createEmail'])->name('createEmail');
Route::get('/result',[SurveyController::class,'getAllResult'])->name('result');

