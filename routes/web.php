<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GroupController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\MemberController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');

//Route::get('/member', [App\Http\Controllers\HomeController::class, 'member'])->name('member');

//Route::view('member', 'student.groupCreate');
//Route::view('home', 'home');

// STUDENT
Route::get('group', [GroupController::class, 'index'])->name('student.display');
//Route::get('add-group', [GroupController::class, 'create'])->name('student.createGroup');

Route::post('add-group', [GroupController::class, 'store']);

Route::post('add-members', [MemberController::class, 'store']);



Route::get('room', [GroupController::class, 'index']);

//Instructor routes
Route::get('/create-room', [RoomController::class, 'create']);
Route::post('/create-room', [RoomController::class, 'store']);

Route::get('/instructor-dashboard', function () {
    return view('instructor');
});
