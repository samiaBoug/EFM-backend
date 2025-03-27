<?php

use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;

Route::resource('/livre', LivreController::class);
