<?php

use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SurgeryController;
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

Route::middleware('auth')->group(function () {
    //beneficiary routes
    Route::get('/dashboard', [BeneficiaryController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/add-beneficiary', [BeneficiaryController::class, 'add'])->name('add-beneficiary');
    Route::post('/post-beneficiary', [BeneficiaryController::class, 'store'])->name('post-beneficiary');
    Route::get('/beneficiary/{id}', [BeneficiaryController::class, 'view'])->name('beneficiary.details');
   /* Route::get('/beneficiary/{id}/edit', [BeneficiaryController::class, 'edit'])->name('beneficiary.details.edit');
    Route::put('/update-beneficiary', [BeneficiaryController::class, 'update'])->name('update-beneficiary');*/

    //surgeries routes

    Route::get('/surgeries', [SurgeryController::class, 'surgery_list'])->name('surgery.index');
    Route::resource('surgery',SurgeryController::class)
           ->only('create');
   

    Route::post('/beneficiary/view-pdf', [BeneficiaryController::class,'download_beneficiaries_PDF'])->name('view.pdf');
    Route::post('/beneficiary/view-pdf/{id}', [BeneficiaryController::class,'download_beneficiary_PDF'])->name('beneficiary.pdf');

    Route::resource('beneficiary', BeneficiaryController::class)
        ->only(['edit', 'update','destroy']);

    //profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
