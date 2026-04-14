<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/event-detail', [EventController::class, 'show'])->name('event.show');
Route::get('/checkout', [EventController::class, 'checkout'])->name('event.checkout');
Route::get('/ticket', [TicketController::class, 'show'])->name('ticket.show');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/events', function () {
        return view('admin.events');
    })->name('admin.events');

    Route::get('/transactions', function () {
        return view('admin.transactions');
    })->name('admin.transactions');

    Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories');
});