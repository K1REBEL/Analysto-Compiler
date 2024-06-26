<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fetch/amazon', [ProductController::class,'fetchDataAmazon']);
Route::get('/fetch/noon', [ProductController::class,'fetchDataNoon']);
Route::get('/fetch/jumia', [ProductController::class,'fetchDataJumia']);
Route::get('/fetch/btech', [ProductController::class,'fetchDataBtech']);
