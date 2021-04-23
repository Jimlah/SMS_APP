<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\StudentController;
use App\Http\Controllers\User\TeacherController;
use App\Http\Controllers\User\UserController;

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
Route::resource('login', Login::class)->only(['index', 'store']);
Route::get('/logout', [LogoutController::class, 'index']);

Route::resources([
    'teachers' => TeacherController::class,
    'students'=> StudentController::class,
    'users' => UserController::class
]);


