<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LuggageController;
use App\Http\Controllers\AirlinesController;
use App\Http\Controllers\PassengersController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/flights', function () {
//     $flights = App\Models\Flight::get();
//     return view('flights', compact('flights'));
// });

Route::get('/flights',[App\Http\Controllers\FlightsController::class, 'index']);

Route::get('/flights/{flight}',[App\Http\Controllers\FlightsController::class, 'show']);

Route::get('/luggage', [LuggageController::class, 'index']);
Route::get('/luggage/{luggage}', [LuggageController::class, 'show']);

Route::get('/luggage/create', [LuggageController::class, 'create']);
Route::post('/luggage', [LuggageController::class, 'store']);

Route::get('/luggage/{luggage}/edit', [LuggageController::class, 'edit']);
Route::put('/luggage/{luggage}', [LuggageController::class, 'update']);

Route::delete( '/luggage/{luggage}', [LuggageController::class, 'destroy']);


Route::get('/airlines', [AirlinesController::class, 'index']);
Route::get('/airlines/create', [AirlinesController::class, 'create']);
Route::post('/airlines', [AirlinesController::class, 'store']);
Route::get('/airlines/{airline}', [AirlinesController::class, 'show']);
Route::get('/airlines/{airline}/edit', [AirlinesController::class, 'edit']);
Route::put('/airlines/{airline}', [AirlinesController::class, 'update']);
Route::delete( '/airlines/{airline}', [AirlinesController::class, 'destroy']);

Route::resource('passengers',PassengersController::class);

