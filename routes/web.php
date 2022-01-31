<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;

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


Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('about', [FrontController::class, 'about'])->name('front.about');
Route::get('portfolio', [FrontController::class, 'portfolio'])->name('front.portfolio');
Route::get('contact', [FrontController::class, 'contact'])->name('front.contact');


Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');