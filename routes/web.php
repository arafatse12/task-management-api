<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HelperController;

Route::get(
    '/',
    function () {
        return redirect('/login');
    }
);
Route::get('/home/{any}', [HomeController::class, 'index'])->where('any', '.*');
Route::get('/home', function () {
    return Redirect::to('/home/dashboard');
});

Auth::routes();

Route::group([
    'prefix' => 'auth'
], function ($router) {

    Route::post('login', [AuthController::class,'login']);
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});


Route::middleware('auth')->group(
    function () {
        Route::resource('task', TaskController::class);
        Route::get('profile', [UserController::class, 'profile']);
        Route::post('profile-update', [UserController::class, 'profileUpdate']);
        Route::resource('user', UserController::class); 
        Route::post('general', [HelperController::class, 'index']);
    }
);



