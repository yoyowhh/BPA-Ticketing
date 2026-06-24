<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

/*
|--------------------------------------------------------------------------
| USER ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [TicketController::class, 'welcome']);
Route::get('/ticket', [TicketController::class, 'create']);
Route::get('/lengkapi-identitas', [TicketController::class, 'identitas']);
Route::get('/dashboard', [TicketController::class, 'index']);

Route::get('/ticket/success', [TicketController::class, 'success'])
    ->name('ticket.success');

Route::get('/ticket/riwayat/{nomor}', [TicketController::class, 'show'])
    ->name('ticket.detail');

Route::post('/ticket/store', [TicketController::class, 'store'])
    ->name('ticket.store');


/*
|--------------------------------------------------------------------------
| ADMIN ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', function () {
    return view('admin.admin-login');
});

Route::get('/admin/admin-dashboard', function () {
    return view('admin.admin-dashboard');
});

Route::get('/admin/admin-ticket', function () {
    return view('admin.admin-ticket');
});

Route::get('/admin/admin-kategori', function () {
    return view('admin.admin-kategori');
});

Route::get('/admin/admin-pengguna', function () {
    return view('admin.admin-pengguna');
});

Route::get('/admin/admin-laporan', function () {
    return view('admin.admin-laporan');
});