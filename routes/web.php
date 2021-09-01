<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\LevelController;
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

Route::get('/',[AdminController::class,'showLoginPage']);
Route::post('/admin/login',[AdminController::class,'Login']);
Route::get('/room/new',[RoomController::class,'AddRoomPage']);
Route::get('/room/edit',[RoomController::class,'EditRoomPage']);
Route::get('/building/new',[BuildingController::class,'AddBuildingPage']);
Route::get('/building/edit',[BuildingController::class,'EditBuildingPage']);
Route::get('/level/new',[LevelController::class,'AddLevelPage']);
Route::get('/level/edit',[LevelController::class,'EditLevelPage']);

