<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\LoginController;
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
    return view('login');
 });
Route::get('/Task_2', function () {
    return view('Task_2');
});

Route::post('submit',[LoginController::class,'create']);
// Route::get('View-verify-page',[LoginController::class,'verifypage']);

Route::get('/Second_page', function () {
    return view('Second_page');
});
Route::get('/Third_page', function () {
    return view('Third_page');
});

Route::get('/Dashboard', function () {
    return view('Dashboard');
});
