<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class, 'index'])->name("index");

Route::get('/contactDetails/{id}', [ContactController::class, 'show'])->name("contactDetails");

Route::get('/contactForm/{id?}', [ContactController::class,'form'])->name("contactFormEdit");

Route::post('/contactForm', [ContactController::class, 'store'])->name('contacts.store');
Route::put('/contactForm/{id}', [ContactController::class, 'update'])->name('contacts.update');
