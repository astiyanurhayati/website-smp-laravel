<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NicaController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\TeacherController;

use App\Http\Models\Nica;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [NicaController::class, 'home']);
Route::get('/info', [NicaController::class, 'info']);
Route::get('/sejarah', [NicaController::class, 'sejarah']);
Route::get('/eskul', [NicaController::class, 'eskul']);
Route::get('/literasi', [NicaController::class, 'literasi']);

Route::get('/teachers', [TeacherController::class, 'teacher']);




Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


