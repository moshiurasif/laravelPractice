<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [SiteController::class, 'home']);
Route::get("/about", [SiteController::class, 'about']);
Route::get("/contact", [SiteController::class, 'contact']);

Route::get("/name/{firstName}/{middleName}/{lastName}", [DemoController::class, 'MyName']);
