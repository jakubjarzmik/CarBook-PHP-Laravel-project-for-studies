<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\RentalsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', [CarsController::class, "index"]);
Route::get('/cars/{id}/edit', [CarsController::class, "edit"]);
Route::post('/cars/{id}/update', [CarsController::class, "update"]);
Route::get('/cars/create', [CarsController::class, "create"]);
Route::post('/cars/create', [CarsController::class, "addToDB"]);
Route::get('/cars/{id}/delete', [CarsController::class, "delete"]);
Route::post('/cars/validate-model', [CarsController::class, "validateModel"]);

Route::get('/clients', [ClientsController::class, "index"]);
Route::get('/clients/{id}/edit', [ClientsController::class, "edit"]);
Route::post('/clients/{id}/update', [ClientsController::class, "update"]);
Route::get('/clients/create', [ClientsController::class, "create"]);
Route::post('/clients/create', [ClientsController::class, "addToDB"]);
Route::get('/clients/{id}/delete', [ClientsController::class, "delete"]);
Route::get('/clients/{id}/add-rental', [ClientsController::class, "addRental"]);
Route::post('/clients/{id}/add-rental', [ClientsController::class, "addRentalToDB"]);
Route::post('/clients/validate-model', [ClientsController::class, "validateModel"]);

Route::get('/rentals', [RentalsController::class, "index"]);
Route::get('/rentals/{id}/return', [RentalsController::class, "return"]);
Route::get('/rentals/{id}/delete', [RentalsController::class, "delete"]);
Route::get('/rentals/search', [RentalsController::class, 'search']);