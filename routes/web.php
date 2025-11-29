<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContractController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/contracts', [ContractController::class, 'allContracts'])->name('contracts');
    Route::get('/add-contract', [ContractController::class, 'addContract'])->name('add-contract');
    Route::post('/submit-contract', [ContractController::class, 'submitContract'])->name('submit-contract');

    Route::get('/view-contract/{contractId}', [ContractController::class, 'viewContract'])->name('view-contract');
    
    Route::post('/store-post', [ContractController::class, 'storePosting'])->name('store-post');
});

require __DIR__.'/auth.php';
