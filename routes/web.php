<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) ->name('home');
Route::get('/about-details', function () {
    return view('about');

})->name('about.details');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
Route::get('/about-me', [ExperienceController::class, 'about'])->name('about');
Route::get('/contact', [ExperienceController::class, 'contact'])->name('contact');

Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();
});
