<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/midtrans-callback', [App\Http\Controllers\Api\MidtransController::class, 'callback']);
