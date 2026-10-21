<?php

use App\Http\Controllers\FetanEqubController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FetanEqubController::class, 'index'])->name('home');
Route::get('/how-it-works', [FetanEqubController::class, 'howItWorks'])->name('how-it-works');
Route::get('/asset-equbs', [FetanEqubController::class, 'assetEqubs'])->name('asset-equbs');
Route::get('/platinum', [FetanEqubController::class, 'platinum'])->name('platinum');
Route::get('/faq', [FetanEqubController::class, 'faq'])->name('faq');
Route::get('/terms', [FetanEqubController::class, 'terms'])->name('terms');
Route::get('/privacy', [FetanEqubController::class, 'privacy'])->name('privacy');
Route::get('/contact', [FetanEqubController::class, 'contact'])->name('contact');

Route::get('/lang/{locale}', [FetanEqubController::class, 'switchLanguage'])->name('switch-language');
Route::post('/api/register-equb', [FetanEqubController::class, 'submitEqubRegistration'])->name('api.register-equb');
