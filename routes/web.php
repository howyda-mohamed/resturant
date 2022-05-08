<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\StuffController;
use App\Http\Controllers\HomeController;
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


Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'
])->group(function () {
        Route::get('/redirects',[HomeController::class,'redirects']);

        Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
            Route::get('/index',[AdminController::class,'index'])->name('admin.index');
            Route::get('/about',[AboutController::class,'index'])->name('about');
            Route::get('/add_about',[AboutController::class,'add'])->name('add_about');
            Route::post('/insert_about',[AboutController::class,'insert']);
            Route::get('edit_about/{id}',[AboutController::class,'edit']);
            Route::put('update_about/{id}',[AboutController::class,'update']);
            Route::get('delete_about/{id}',[AboutController::class,'delete']);

            Route::get('/menu',[MenuController::class,'index'])->name('menu');
            Route::get('/add_menu',[MenuController::class,'add'])->name('add_menu');
            Route::post('/insert_menu',[MenuController::class,'insert']);
            Route::get('edit_menu/{id}',[MenuController::class,'edit']);
            Route::put('update_menu/{id}',[MenuController::class,'update']);
            Route::get('delete_menu/{id}',[MenuController::class,'delete']);

            Route::get('/stuff',[StuffController::class,'index'])->name('stuff');
            Route::get('/add_stuff',[StuffController::class,'add'])->name('add_stuff');
            Route::post('/insert_stuff',[StuffController::class,'insert']);
            Route::get('edit_stuff/{id}',[StuffController::class,'edit']);
            Route::put('update_stuff/{id}',[StuffController::class,'update']);
            Route::get('delete_stuff/{id}',[StuffController::class,'delete']);

            Route::get('/reserv',[ReservationController::class,'index'])->name('reserv');
            Route::get('delete_reserv/{id}',[ReservationController::class,'delete']);
        });
        Route::post('/add_reserv',[HomeController::class,'add_reserv'])->name('reservation');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
