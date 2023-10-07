<?php

use Illuminate\Support\Facades\Route;

/**
 * 'api' middleware and 'api/invoice-and-user' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::api('invoice-and-user', function () {
    
    Route::apiResource('users', 'Users');
    Route::apiResource('invoices', 'Invoices');
});