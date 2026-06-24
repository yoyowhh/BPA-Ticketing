<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| AUTH USER
|--------------------------------------------------------------------------
*/

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| PUBLIC HOME
|--------------------------------------------------------------------------
*/

Route::get('/', [TicketController::class, 'welcome']);

/*
|--------------------------------------------------------------------------
| USER AREA
|--------------------------------------------------------------------------
*/

Route::middleware('auth.user')->group(function () {

    Route::get('/dashboard', [TicketController::class, 'index']);

    Route::get('/profile', [UserController::class, 'profile']);

    // ======================
    // TICKET USER FLOW
    // ======================

    Route::get('/ticket/create', [TicketController::class, 'create']);

    Route::post('/ticket/store', [TicketController::class, 'store'])
        ->name('ticket.store');

    Route::get('/ticket/history', [TicketController::class, 'history']);

    // DETAIL TICKET (WAJIB PALING BAWAH + CONSTRAINT)
    Route::get('/ticket/{id}', [TicketController::class, 'show'])
        ->whereNumber('id');

    Route::post('/ticket/{id}/reply', [TicketController::class, 'reply'])
        ->whereNumber('id');

    Route::post('/ticket/{id}/close', [TicketController::class, 'close'])
        ->whereNumber('id');
});

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminController::class, 'loginPage']);
Route::post('/admin/login', [AdminController::class, 'login']);

Route::middleware('auth.admin')->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

    Route::get('/admin/tickets', [AdminController::class, 'tickets']);

    Route::get('/admin/ticket/{id}', [AdminController::class, 'detail'])
        ->whereNumber('id');

    Route::post('/admin/ticket/{id}/reply', [AdminController::class, 'reply'])
        ->whereNumber('id');

    Route::post('/admin/ticket/{id}/status', [AdminController::class, 'updateStatus'])
        ->whereNumber('id');

    // OPTIONAL: halaman kategori/pengguna/laporan (view-only)
    Route::get('/admin/kategori', fn () => view('admin.admin-kategori'));
    Route::get('/admin/pengguna', fn () => view('admin.admin-pengguna'));
    Route::get('/admin/laporan', fn () => view('admin.admin-laporan'));
});
