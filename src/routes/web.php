<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/confirm', [ContactController::class, 'confirm']);
Route::post('/contact/thanks', [ContactController::class, 'store']);
Route::get('/admin', [ContactController::class, 'admin']);
Route::get('/admin/search', [ContactController::class, 'search']);
