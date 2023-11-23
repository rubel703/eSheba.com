<?php

use App\Http\Controllers\Backend\AppoinmentController;
use App\Http\Controllers\Backend\BanerSectionController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\DoctorController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/doctor', [HomeController::class, 'doctor'])->name('doctor');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::POST('/contact', [HomeController::class, 'storeContact'])->name('storeContact');
Route::POST('/home', [HomeController::class, 'store'])->name('storeappoinment');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    #department route---------
    Route::get('/createdepartment', [DepartmentController::class, 'create'])->name('create');
    Route::POST('/storedepartment', [DepartmentController::class, 'store'])->name('store');
    Route::get('/viewdepartment', [DepartmentController::class, 'index'])->name('index');
    Route::get('/deletedepartment/{id}', [DepartmentController::class, 'destroy'])->name('destroy');
    Route::get('/editdepartment/{id}', [DepartmentController::class, 'edit'])->name('edit');
    Route::POST('/updatedepartment/{id}', [DepartmentController::class, 'update'])->name('update');

    #doctor route----------
    Route::get('/createdoctor', [DoctorController::class, 'create'])->name('createdoctor');
    Route::POST('/storedoctor', [DoctorController::class, 'store'])->name('storedoctor');
    Route::get('/viewdoctor', [DoctorController::class, 'index'])->name('indexdoctor');
    Route::get('/deletedoctor/{id}', [DoctorController::class, 'destroy'])->name('destroydoctor');
    Route::get('/editdoctor/{id}', [DoctorController::class, 'edit'])->name('editdoctor');
    Route::POST('/updatedoctor/{id}', [DoctorController::class, 'update'])->name('updatedoctor');

    #appoinment route---------
    Route::get('/viewappoinment', [AppoinmentController::class, 'viewAppoinment'])->name('viewappoinment');
    Route::get('/app_delete_message/{id}', [AppoinmentController::class, 'destroyMessage'])->name('app_delete_message');

    #contact route-----------
    Route::get('/viewcontact', [ContactController::class, 'viewContact'])->name('viewcontact');
    Route::get('/con_delete_message/{id}', [ContactController::class, 'destroyMessage'])->name('con_delete_message');

    #baner section route------------
    Route::resource('banerSection',BanerSectionController::class);
});
