<?php

use App\Models\Verification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VerificationController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

//router storage link wajib dan artisan atas nya juga 
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'Storage linked sucessfully.';
});


Route::get('/', function () {
    return view('home');
});


Route::get('/admin/auth/login', fn() => view('auth.login'))->name('login');
Route::post('/admin/auth/login', [AuthController::class, 'login']);

Route::get('/register', fn() => view('auth.register'))->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/auth-google-redirect', [AuthController::class, 'google_redirect']);
Route::get('/auth-google-callback', [AuthController::class, 'google_callback']);

Route::group(['middleware' => ['auth', 'check_role:member']], function () {
    Route::get('/verify', [VerificationController::class, 'index']);
    Route::post('/verify', [VerificationController::class, 'store']);
    Route::get('/verify/{unique_id}', [VerificationController::class, 'show']);
    Route::put('/verify/{unique_id}', [VerificationController::class, 'update']);
});

Route::group(['middleware' => ['auth', 'check_role:member', 'check_status']], function () {
    Route::get('/dashboard', fn() => 'member');
});
Route::group(['middleware' => ['auth', 'check_role:admin,staff']], function () {
    Route::get('/admin', [AdminController::class, 'index']);
});
Route::group(['middleware' => ['auth', 'check_role:admin']], function () {
    Route::get('/user', fn() => 'halaman user');
});
Route::get('/logout', [AuthController::class, 'logout']);
