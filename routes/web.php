<?php

use App\Http\Controllers\ControllerHome;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerHome::class, 'home'])->name('home-page');

Route::get('/anime/{id}', [ControllerHome::class, 'show'])->name('show');


Route::get('/my-person', [ControllerHome::class, 'person'])->name('person');