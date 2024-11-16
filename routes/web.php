<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('pages.home');

Route::get('/category/{slug}', [App\Http\Controllers\CategoryController::class, 'show'])->name('pages.category.show');

Route::get('/city/{slug}', [App\Http\Controllers\CityController::class, 'show'])->name('pages.city.show');

Route::get('/kos/{slug}', [App\Http\Controllers\BoardingHouseController::class, 'show'])->name('pages.boarding-house.show');
Route::get('/kos/{slug}/rooms', [App\Http\Controllers\BoardingHouseController::class, 'rooms'])->name('pages.boarding-house.rooms');

Route::get('/kos/booking/{slug}', [App\Http\Controllers\BookingController::class, 'booking'])->name('pages.booking.index');
Route::get('/kos/booking/{slug}/information', [App\Http\Controllers\BookingController::class, 'information'])->name('pages.booking.information');
Route::post('/kos/booking/{slug}/information/save', [App\Http\Controllers\BookingController::class, 'saveInformation'])->name('booking.information.save');

Route::get('/kos/booking/{slug}/checkout', [App\Http\Controllers\BookingController::class, 'checkout'])->name('booking.checkout');
Route::post('/kos/booking/{slug}/payment', [App\Http\Controllers\BookingController::class, 'payment'])->name('booking.payment');

Route::get('/find-kos', [App\Http\Controllers\BoardingHouseController::class, 'find'])->name('pages.boarding-house.find');
Route::get('/find-results', [App\Http\Controllers\BoardingHouseController::class, 'findResults'])->name('pages.boarding-house.find-results');

Route::get('/check-booking', [App\Http\Controllers\BookingController::class, 'check'])->name('pages.booking.check-booking');
Route::post('/check-booking/show', [App\Http\Controllers\BookingController::class, 'show'])->name('pages.booking.check-booking.show');

Route::get('/booking-success', [App\Http\Controllers\BookingController::class, 'success'])->name('pages.booking.success');

