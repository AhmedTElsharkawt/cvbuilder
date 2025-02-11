<?php

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\backend\CvController;
use App\Http\Controllers\backend\EducationController;
use App\Http\Controllers\backend\InformationController;
use App\Http\Controllers\backend\SkillController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\LanguageController;
use App\Http\Controllers\backend\ImageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'index')->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/cv', [CvController::class, 'index'])->name('cv');
    Route::get('/cv/download', [CvController::class, 'downloadPdf'])->name('cv.download');
    Route::resource('information', InformationController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('skills', SkillController::class);
    Route::resource('education', EducationController::class);
    Route::resource('languages', LanguageController::class);
    Route::resource('images', ImageController::class);
});




require __DIR__.'/auth.php';
