<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsvpController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/rsvp-submit', [RsvpController::class, 'store'])->name('rsvp.submit');

Route::get('/admin/guests', [AdminController::class, 'index'])->name('admin.guests');

Route::delete('/guests/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('guests.destroy');