<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StaticController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index']);
Route::get('/uploadpage', [PageController::class, 'uploadPage']);
Route::post('/uploadfile', [PageController::class, 'store']);
Route::get('/showfile', [PageController::class, 'show']);
Route::get('/download/{file}', [PageController::class, 'downloadFile']);
Route::get('/viewfile/{id}', [PageController::class, 'viewFile']);
// Route::get('/', [StaticController::class, 'index']);
// Route::get('/blog/{url}', [StaticController::class, 'blogPost'])->name('postShow');

// Route::get('/{any}', 'SpaController@index')->where('any', '.*');
