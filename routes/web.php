<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

//rederigir al index 

Route::get('/student', [StudentController::class, 'index'])->name('student.index');

Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');

Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');

Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');

Route::get('/student/show/{id}', [StudentController::class, 'show'])->name('student.show');

Route::put('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');

Route::delete('/student/destroy/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

