<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/anime', [ApiController::class, 'indexApi'])->name('indexApi');