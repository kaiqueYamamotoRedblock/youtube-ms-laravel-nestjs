<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailsMSController;

Route::post('emails', [EmailsMSController::class, 'create']);
Route::get('/', function() {
    return [ "message" => "Hello"];
});
