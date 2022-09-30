<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('import-user',[UserController::class,'importuser'])->name('import');
// Route::post('upload-user',[UserController::class,'uploadUsers'])->name('upload');

// Route::get('/import_excel', 'UserController@index');
// Route::post('/import_excel/import', 'UserController@import');

Route::get('/', 'UserController@index');

Route::post('/import', 'UserController@importData');

Route::get('/export', 'UserController@exportData');