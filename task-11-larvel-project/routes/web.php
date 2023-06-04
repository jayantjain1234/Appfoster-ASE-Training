<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', function() {
    return view('welcome');
});


Route::get('users',[UserController::class,'index']);
Route::get('add-user',[UserController::class,'addUser']);
Route::post('save-user',[UserController::class,'saveUser']);
Route::get('user-project/{id}',[UserController::class,'viewProject']);
Route::get('edit-user/{id}',[UserController::class,'editUser']);
Route::post('update-user',[UserController::class,'updateUser']);
Route::get('delete-user/{id}',[UserController::class,'deleteUser']);
Route::get('delete-user-project/{id}',[UserController::class,'deleteUserProject']);
Route::get('update-user-project/{id}',[UserController::class,'updateUserproject']);
Route::post('project-details',[UserController::class,'updateprjectdetails']);
