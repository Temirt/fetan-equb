<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FetanEqubController;
use Illuminate\Support\Facades\Route;

// Public Website Pages
Route::get('/', [FetanEqubController::class, 'index'])->name('home');
Route::get('/how-it-works', [FetanEqubController::class, 'howItWorks'])->name('how-it-works');
Route::get('/asset-equbs', [FetanEqubController::class, 'assetEqubs'])->name('asset-equbs');
Route::get('/platinum', [FetanEqubController::class, 'platinum'])->name('platinum');
Route::get('/faq', [FetanEqubController::class, 'faq'])->name('faq');
Route::get('/terms', [FetanEqubController::class, 'terms'])->name('terms');
Route::get('/privacy', [FetanEqubController::class, 'privacy'])->name('privacy');
Route::get('/contact', [FetanEqubController::class, 'contact'])->name('contact');

// Language & API endpoints
Route::get('/lang/{locale}', [FetanEqubController::class, 'switchLanguage'])->name('switch-language');
Route::post('/api/register-equb', [FetanEqubController::class, 'submitEqubRegistration'])->name('api.register-equb');

// Contact Us & User Feedback Form Submissions
Route::post('/contact', [ContactController::class, 'submitContact'])->name('contact.submit');
Route::post('/feedback', [ContactController::class, 'submitFeedback'])->name('feedback.submit');

// Admin Authentication & Console Routes
Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.submit');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    // Protected Admin Panel Routes
    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::post('/messages/{id}/status', [AdminController::class, 'updateStatus'])->name('messages.status');
        Route::delete('/messages/{id}', [AdminController::class, 'destroy'])->name('messages.destroy');
    });
});
