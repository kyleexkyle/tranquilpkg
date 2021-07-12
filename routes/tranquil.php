<?php
use Illuminate\Support\Facades\Route;
use Kyle\Tranquil\Http\TranquilController;


Route::resource('tranquil',TranquilController::class);
