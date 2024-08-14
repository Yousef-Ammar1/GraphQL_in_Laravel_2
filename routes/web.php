<?php

use Illuminate\Support\Facades\Route;
use Laravel\Reverb\Pulse\Recorders\ReverbMessages;

Route::get('/', function () {
    return view('welcome');
});
