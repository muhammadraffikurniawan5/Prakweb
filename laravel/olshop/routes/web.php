<?php

use App\Http\Controllers\InputController;
use App\Http\Controllers\ForminputController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;

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

Route::get('/salam', function () {
    return "Hallo selamat siang teman - teman";
});

Route::get('/about', function(){
    return view('about', [
        "title" => "about",
        "nama" => "Muhammad Raffi",
        "umur" => 20,
        "email" => "muhammadraffikurniawan05@gmail.com",
        ]);
});

Route::get('/kesehatan', function () {
    return view('kesehatan');
});

Route::get('/input', function () {
    return view('input');
});

Route::get('/output', function () {
    return view('output');
}); 

Route::get('/about', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::get('/form', function () {
    return view('forminput');
});

Route::get('/form', [ForminputController::class, 'index']);
Route::post('/form', [ForminputController::class, 'form']);         

Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
});

Route::prefix('frontend')->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
});