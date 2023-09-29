<?php

use App\Http\Controllers\BangunanController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PelaporanController;
use App\Http\Controllers\PengadaanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\PrasaranaController;
use App\Models\Category;
use App\Models\Pelaporan;

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

Route::get('/percobaan', function () {
    return view('pp');
});

Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('prasarana', PrasaranaController::class);
Route::resource('sarana', SaranaController::class);
Route::resource('category', CategoryController::class);
route::get('category/editajax/{id}', [CategoryController::class, 'edit'])->name('category.editajax');
route::post('edit-category', [CategoryController::class, 'updatecategory']);
Route::resource('pengadaan', PengadaanController::class);
Route::resource('pelaporan', PelaporanController::class);
Route::resource('bangunan', BangunanController::class);
