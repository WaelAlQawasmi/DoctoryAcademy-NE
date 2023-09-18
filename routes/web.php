<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::group(['middleware' => ['auth']], function() {
        Route::resource('roles',RoleController::class);
        Route::resource('users',UserController::class);
        });


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Auth::routes();
	Route::get('/', function () {
        return view('welcome');
    });

    
    Route::get('/create-users-with-role/{roleName}',[UserController::class,'CreatUserWithRole'])->middleware('role:Super Admin|Admin')->name('users.CreatUserWithRole');
    Route::post('/stor-users-with-role',[UserController::class,'StorUserWithRole'])->middleware('role:Super Admin|Admin')->name('users.StorUserWithRole');

});
Route::get('/translations')->middleware('auth');
