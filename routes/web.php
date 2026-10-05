<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FingerAccessController;



Route::get('/', [FingerAccessController::class, 'index'])->name('finger-access.index');