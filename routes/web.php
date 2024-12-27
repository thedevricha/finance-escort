<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/expense', [ExpenseController::class, 'index'])->name('expenses.index');
    Route::get('/expense/create', [ExpenseController::class, 'create'])->name('expenses.create');
    Route::get('/expense/{expense}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');
    Route::post('/expense/store', [ExpenseController::class, 'store'])->name('expenses.store');
    Route::post('/expense/update', [ExpenseController::class, 'update'])->name('expenses.update');
    Route::post('/expense', [ExpenseController::class, 'destroy'])->name('expenses.destroy');
});

require __DIR__.'/auth.php';
