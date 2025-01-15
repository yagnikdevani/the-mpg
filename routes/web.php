<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WarrantyRegistrationController;
use App\Http\Controllers\TechnicalLiteratureController;
use App\Http\Controllers\ServiceRequestController;
use Illuminate\Support\Facades\Route;

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
})->name('front.home');

Route::get('/warranty-registration', [WarrantyRegistrationController::class, 'registration'])->name('front.warranty-registration');
Route::post('/warranty-registration-submit', [WarrantyRegistrationController::class, 'registrationSubmit'])->name('front.warranty-registration-submit');
Route::get('/technical-literature-request', [TechnicalLiteratureController::class, 'registration'])->name('front.technical-literature-request');
Route::get('/service-request', [ServiceRequestController::class, 'registration'])->name('front.service-request');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
