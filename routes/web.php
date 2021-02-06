<?php

use Illuminate\Support\Facades\Route;
use app\Htpps\Controllers\AdminUserController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin/users', 'AdminUserController');

Route::get('/', function () {
    return view('welcome');
    /* $user = Auth::user();
    if ($user->admin()) {
        Route::resource('admin/users', 'AdminUserController');
        echo 'Eres ADMINSTRADOR';
    }else {
        return view('welcome');
        echo 'Eres un USUARIO';
    } */
});

Route::get('/admin', 'adminController@index');

