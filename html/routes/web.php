<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
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

// Display the login form
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', function () {
    Auth::logout(); 
    return redirect()->route('index');
})->name('logout');


Route::get('/', [ContactController::class, 'index'])->name("index");

// Only authenticated users can access
Route::middleware(['auth'])->group(function () {
    Route::get('/contactDetails/{id}', [ContactController::class, 'show'])->name("contactDetails");

    Route::get('/contactForm/{id?}', [ContactController::class,'form'])->name("contactForm");
    
    Route::post('/contactForm', [ContactController::class, 'store'])->name('contacts.store');
    Route::put('/contactForm/{id}', [ContactController::class, 'update'])->name('contacts.update');
    
    
    Route::delete('/contacts/{id}', [ContactController::class,'destroy'])->name('contacts.destroy');
});
