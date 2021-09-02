<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\LevelController;


Route::get('/',[AdminController::class,'showLoginPage']);
Route::post('/admin/login',[AdminController::class,'Login']);
Route::get('/admin/login/provider',[AdminController::class,'redirectToProvider']);
Route::get('/admin/login/google/c',[AdminController::class,'GoogleCallback']);
Route::get('/admin/logout',[AdminController::class,'LogOut']);

Route::get('/room/new',[RoomController::class,'AddRoomPage']);
Route::post('/room/new',[RoomController::class,'createRoom']);
Route::get('/room/edit/{id}',[RoomController::class,'EditRoomPage']);
Route::post('/room/edit/{id}',[RoomController::class,'updateRoom']);
Route::get('/room/list',[RoomController::class,'ListRoomPage']);
Route::get('/room/delete/{id}',[RoomController::class,'deleteRoom']);

Route::get('/building/new',[BuildingController::class,'AddBuildingPage']);
Route::post('/building/new',[BuildingController::class,'createBuilding']);
Route::get('/building/edit/{id}',[BuildingController::class,'EditBuildingPage']);
Route::post('/building/edit/{id}',[BuildingController::class,'EditBuildingPage']);
Route::get('/building/list',[BuildingController::class,'ListBuildingPage']);
Route::get('/building/delete/{id}',[BuildingController::class,'EditBuildingPage']);

Route::get('/level/new',[LevelController::class,'AddLevelPage']);
Route::post('/level/new',[LevelController::class,'createLevel']);
Route::get('/level/edit/{id}',[LevelController::class,'EditLevelPage']);
Route::post('/level/edit/{id}',[LevelController::class,'EditLevelPage']);
Route::get('/level/list',[LevelController::class,'ListLevelPage']);
Route::get('/level/delete/{id}',[LevelController::class,'EditLevelPage']);
