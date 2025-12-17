<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ResumeController;

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


    Route::get('/resume/create', [ResumeController::class, 'index'])->name('resume.create');
    Route::post('/resume/store',[ResumeController::class,'store'])->name('resume.store');
    Route::get('/resume/show/{id}', [ResumeController::class, 'show'])->name('resume.show');

});

require __DIR__.'/auth.php';
