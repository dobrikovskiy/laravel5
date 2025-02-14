<?php

use App\Http\Controllers\EmployeeController;

// Роут для отображения формы
Route::get('get-employee-data', [EmployeeController::class, 'index'])->name('employee.index');

// Роут для обработки данных формы
Route::post('store-form', [EmployeeController::class, 'store'])->name('employee.store');

// Роут для отображения информации о работнике
Route::get('employee/{id}', [EmployeeController::class, 'show'])->name('employee.show');
