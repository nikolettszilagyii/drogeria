<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfumeController;

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

Route::get('/', [ PerfumeController::class, "getPerfumes"]);

Route::get( "/perfumes", [ PerfumeController::class, "getPerfumes" ]);
Route::get( "/new-perfume", [ PerfumeController::class, "newPerfume" ]);
Route::post( "/add-perfume", [ PerfumeController::class, "storePerfume" ]);
Route::get( "/edit-perfume/{id}", [ PerfumeController::class, "editPerfume" ]);
Route::post( "/update-perfume", [ PerfumeController::class, "updatePerfume" ]);
Route::get( "/delete-perfume/{id}", [ PerfumeController::class, "deletePerfume" ]);
