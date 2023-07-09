<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, 'home']);
// Route::get("/", MyController::class);
Route::get("/about", [SiteController::class, 'about']);
Route::get("/contact", [SiteController::class, 'contact']);

Route::get("/name/{firstName}/{middleName}/{lastName}", [DemoController::class, 'MyName']);
Route::resource('photos', PhotoController::class);

// group routing
// Route::group(['prefix' => 'account'], function () {
//     Route::get('/profile', function () {
//         return 'Profile';
//     });
//     Route::get('/login', function () {
//         return 'Login';
//     });
//     Route::get('/signup', function () {
//         return 'Sign UP';
//     });
//     Route::get('/updateprofile', function () {
//         return 'Update Profile';
//     });
//     Route::get('/logout', function () {
//         return 'Logout';
//     });
// });

Route::prefix('account')->group(function () {
    Route::get('/profile', function () {
        return 'Profile';
    });
    Route::get('/login', function () {
        return 'Login';
    });
    Route::get('/signup', function () {
        return 'Sign UP';
    });
    Route::get('/updateprofile', function () {
        return 'Update Profile';
    });
    Route::get('/logout', function () {
        return 'Logout';
    });
});
