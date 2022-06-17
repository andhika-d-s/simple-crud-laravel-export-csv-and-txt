<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;

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

Route::get('/biodata', [BiodataController::class, 'getData'])->name('biodata');
Route::get('/biodata/add', [BiodataController::class, 'postData'])->name('add_data');
Route::post('/post_biodata', [BiodataController::class, 'storeData'])->name('post_biodata');
Route::get('/biodata/update/{id}', [BiodataController::class, 'viewUpdate']);
Route::put('/biodata/updates/{id}', [BiodataController::class, 'putData']);
Route::get('/biodata/delete/{id}', [BiodataController::class, 'destroyData']);
Route::get('/biodata/export/csv', [BiodataController::class, 'exportCsv'])->name('exportCsv');
Route::get('/biodata/export/txt', [BiodataController::class, 'exportTxt'])->name('exportTxt');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
