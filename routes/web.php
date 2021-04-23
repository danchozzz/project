<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvertisementsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MailController;
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

Route::get('/welcome', function () {
    return view('welcome');

})->name('welcome');
Route::get('/2', function () {
    return view('2');
})->name('2');
Route::get('/3', [MailController::class, 'index']) -> name('3'); 
Route::post('/3', [MailController::class, 'send']) -> name('3');   
Route::get('/4', [AdvertisementsController::class, 'index']) -> name('4');
Route::get('/5', function () {
    return view('5');
})->name('5');
Route::get('/6', function () {
    return view('6');
})->name('6');
Route::post('/2', [AdvertisementsController::class , 'store'] ) -> name('2');

Route::post('/6', [ProfileController::class , 'store'] ) -> name('6');
Route::get('/5', [ProfileController::class , 'index'] ) -> name('5');

