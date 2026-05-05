<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloInformatikaController;

// HOME
Route::get('/', [HelloInformatikaController::class, 'home']);

// FORM
Route::get('/form-anggota', [HelloInformatikaController::class, 'formAnggota']);
Route::get('/form-aspirasi', [HelloInformatikaController::class, 'formAspirasi']);

// ANGGOTA
Route::post('/anggota/store', [HelloInformatikaController::class, 'storeAnggota']);
Route::get('/anggota', [HelloInformatikaController::class, 'listAnggota']);
Route::get('/anggota/delete/{id}', [HelloInformatikaController::class, 'deleteAnggota']);
Route::get('/anggota/edit/{id}', [HelloInformatikaController::class, 'editAnggota']);
Route::post('/anggota/update/{id}', [HelloInformatikaController::class, 'updateAnggota']);

// ASPIRASI
Route::post('/aspirasi/store', [HelloInformatikaController::class, 'storeAspirasi']);
Route::get('/aspirasi', [HelloInformatikaController::class, 'listAspirasi']);
Route::get('/aspirasi/delete/{id}', [HelloInformatikaController::class, 'deleteAspirasi']);
Route::get('/aspirasi/edit/{id}', [HelloInformatikaController::class, 'editAspirasi']);
Route::post('/aspirasi/update/{id}', [HelloInformatikaController::class, 'updateAspirasi']);

Route::get('/daftar', [HelloInformatikaController::class, 'formAnggota']);
Route::post('/daftar', [HelloInformatikaController::class, 'storeAnggota']);