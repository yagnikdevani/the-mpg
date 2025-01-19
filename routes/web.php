<?php

use App\Http\Controllers\Admin\EmployeeUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WarrantyRegistrationController;
use App\Http\Controllers\Admin\WarrantyController;
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

Route::get('/registration-and-request', function () {
    return view('registration-and-request');
})->name('front.registration-and-request');

Route::get('/product-warranty-registration', [WarrantyRegistrationController::class, 'registration'])->name('front.warranty-registration');
Route::post('/warranty-registration-submit', [WarrantyRegistrationController::class, 'registrationSubmit'])->name('front.warranty-registration-submit');

Route::get('/technical-literature-request', [TechnicalLiteratureController::class, 'registration'])->name('front.technical-literature-request');
Route::post('/technical-literature-submit', [TechnicalLiteratureController::class, 'technicalSubmit'])->name('front.technical-literature-submit');
Route::get('/get-warranty-registration', [TechnicalLiteratureController::class, 'getregistration'])->name('front.get-registration');

Route::get('/service-request', [ServiceRequestController::class, 'registration'])->name('front.service-request');
Route::post('/service-request-submit', [ServiceRequestController::class, 'registrationSubmit'])->name('front.service-request-submit');

//common route
Route::get('/get-states', [WarrantyRegistrationController::class, 'getStates'])->name('front.getStates');



Route::get('/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    

    Route::group(['prefix'=>'warranty-registration'], function(){
        Route::get('/', [WarrantyController::class, 'index'])->name('warranty.index');
    });

    Route::group(['prefix'=>'manage-employee'], function(){
        Route::get('/', [EmployeeUserController::class, 'index'])->name('employee.index');
    });
});

require __DIR__.'/auth.php';
