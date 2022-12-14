<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;

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

Route::resource('heroes', HomeController::class);
// ->only(['index', 'store', 'show', 'destroy']);

// Route::get('/', function () {
//     return view('welcome');
// });
