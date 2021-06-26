<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ApplicationController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('users', UserController::class)->except(
    ['create','store']
);

Route::resource('applications', ApplicationController::class);

Route::prefix('applications')->group(function () {
    Route::put('{application_id}/approve', [ApplicationController::class, 'approve'])->name('applications.approve');
    Route::put('{application_id}/reject', [ApplicationController::class, 'reject'])->name('applications.reject');
});

require __DIR__.'/auth.php';