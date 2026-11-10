<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\OrderController;

Route::post(
  '/calculate-shipping-date', [OrderController::class, 'calculateShippingDate']
  );