<?php

use App\Http\Controllers\depancontroller;
use App\Http\Controllers\EducationController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;


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
Route::resource('Educations', EducationController::class);
Route::get('/', [depancontroller::class,"index"]);
Route::get('/Educations', [EducationController::class,"index"]);

Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/callback', function () {
    return '<h1>Selamat Datang Di Halaman Dashboard</h1>';
});
 Route::get('/dashboard', function () {return view  ('Dashboard.index'); });