<?php

use App\Http\Controllers\AdminGalleryController;
use App\Http\Controllers\AdminIndexController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminTablesController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
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
Route::get('/Collection',[CollectionController::class,'index']);
Route::get('/Contact', [ContactController::class,'index']);
Route::get('/Gallery', [GalleryController::class, 'index']);
Route::get('/Home',[HomeController::class, 'index']);

Route::get('/adminlogin',[AdminLoginController::class, 'adminindex'])->name('adminlogin');
Route::post('/process-login', [AdminLoginController::class, 'login'])->name('process-login');
    Route::prefix('admin')->middleware('isAdmin')->group(function(){
    Route::get('/Adminindex', [AdminIndexController::class, 'adminindex'])->name('adminindex');
    Route::get('/Admintables',[AdminTablesController::class, 'adminindex']);
    Route::get('/Admingallery',[AdminGalleryController::class, 'adminindex']);
});
