<?php

use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\ProfileController;
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
});

Route::get('/add-beneficiary', function () {
    return view('admin/forms/beneficiary');
})->name('add-beneficiary');
Route::post('/post-beneficiary', [BeneficiaryController::class, 'store'])->name('post-beneficiary');
Route::get('/dashboard', [BeneficiaryController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/beneficiary/{id}', [BeneficiaryController::class, 'view'])->name('beneficiary.details');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
