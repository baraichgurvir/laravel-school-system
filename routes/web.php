<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view("/","home")->name("home");

Route::prefix("admin")->group(function(){
    Route::name("admin.")->group(function(){

        Route::middleware(["guestabc"])->group(function() {
            Route::get("login",[ AdminController::class  , 'login' ])->name("login");
            Route::get("register",[ AdminController::class  , 'register' ])->name("register");
            Route::post("created",[ AdminController::class  , 'createAdmin' ])->name("created");
            Route::post("check",[ AdminController::class  , 'check' ])->name("check");
        });
        
        Route::middleware(['admin_auth'])->group(function(){
            Route::get("home",[ AdminController::class  , 'home' ])->name("home");
            Route::get("logout",[ AdminController::class  , 'logout' ])->name("logout");
            Route::get("profile",[ AdminController::class  , 'profile' ])->name("profile");
        });
    });
});