<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController as GuestHomeController;
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

Route::get('/', function () {
    return view('pages.general-page');
});

Auth::routes();

Route::get('home', [GuestHomeController::class, 'index'])->name('home'); //Pagina home per utenti guest

route::middleware('auth')->name('admin.')->prefix('admin/')->group(function(){

        Route::get('admin/home', [AdminHomeController::class, 'index'])->name('admin.home'); //(Pagina Home per utenti loggati)
    }
);