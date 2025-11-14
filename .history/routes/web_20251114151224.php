<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/create', [StudentController::class, 'create'])->name('student.create');
Route::post('store', [StudentController::class, 'store'])->name('store');
Route::put('update/{id}', [StudentController::class, 'update'])->name('students.update');
Route::put('update/{id}', [StudentController::class, 'update'])->name('students.update');



Route::get('student/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');

Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teachers.create');
Route::post('/teachers/store', [TeacherController::class, 'store'])->name('teachers.store');





