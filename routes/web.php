<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InventoryController;

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    'inventories',
    [InventoryController::class, 'index']
)->name('inventories.index');

Route::get(
    'inventories/{id}',
    [InventoryController::class, 'show']
)->name('inventories.show');

Route::get(
    'employees/trash/{id}',
    [EmployeeController::class, 'trash']
)->name('employees.trash')->middleware(['auth', 'verified']);

Route::get(
    'employees/trashed/',
    [EmployeeController::class, 'trashed']
)->name('employees.trashed')->middleware(['auth', 'verified']);

Route::get(
    'employees/restore/{id}',
    [EmployeeController::class, 'trash']
)->name('employees.restore')->middleware(['auth', 'verified']);

Route::resource('employees', EmployeeController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
