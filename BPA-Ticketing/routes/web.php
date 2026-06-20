<?php

use Illuminate\Support\Facades\Route;
// 1. Wajib import Controller-nya di sini agar dikenali oleh Laravel
use App\Http\Controllers\TicketController;

// 2. Route yang diatur oleh TicketController
Route::get('/', [TicketController::class, 'welcome']);
Route::get('/ticket', [TicketController::class, 'create']);
Route::get('/lengkapi-identitas', [TicketController::class, 'identitas']);
Route::get('/dashboard', [TicketController::class, 'index']);
Route::get('/ticket/success', [TicketController::class, 'success'])->name('ticket.success');

// Route untuk melihat detail riwayat tiket spesifik
Route::get('/ticket/riwayat/{nomor}', [TicketController::class, 'show'])->name('ticket.detail');
// Route POST untuk menangkap data saat user klik submit di form ticket
Route::post('/ticket/store', [TicketController::class, 'store'])->name('ticket.store');

// 3. Route untuk Admin Login (Jika mau dimasukkan ke AuthController nanti juga bisa)
Route::get('/admin/login', function () {
    return view('admin-login');
});