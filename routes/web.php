<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;

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


Route::get('/', function () {
    return view('user.welcome');
});

Route::middleware('auth:users')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');
    Route::get('create/{home}', [HomeController::class, 'create'])->name('home.create');
    Route::post('store/{home}', [HomeController::class, 'store'])->name('home.store');
    Route::get('edit/{home}', [HomeController::class, 'edit'])->name('home.edit');
    Route::post('update/{home}', [HomeController::class, 'update'])->name('home.update');
});


require __DIR__.'/auth.php';


