<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\JobTitleController;
use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employee', EmployeeController::class)->only('create', 'store', 'show', 'index')->middleware('auth');
Route::resource('entity', EntityController::class)->only('create', 'store', 'show', 'index')->middleware('auth');
Route::resource('job-title', JobTitleController::class)->only('create', 'store', 'show', 'index')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
