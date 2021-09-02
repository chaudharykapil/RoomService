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
Route::post('/room/edit',[RoomController::class,'EditRoomPage']);
Route::get('/room/list',[RoomController::class,'ListRoomPage']);
Route::post('/room/delete',[RoomController::class,'EditRoomPage']);
Route::get('/building/new',[BuildingController::class,'AddBuildingPage']);
Route::post('/building/new',[BuildingController::class,'createBuilding']);
Route::get('/building/edit',[BuildingController::class,'EditBuildingPage']);
Route::post('/building/edit',[BuildingController::class,'EditBuildingPage']);
Route::get('/building/list',[BuildingController::class,'ListBuildingPage']);
Route::post('/building/delete',[BuildingController::class,'EditBuildingPage']);
Route::get('/level/new',[LevelController::class,'AddLevelPage']);
Route::post('/level/new',[LevelController::class,'createLevel']);
Route::get('/level/edit',[LevelController::class,'EditLevelPage']);
Route::post('/level/edit',[LevelController::class,'EditLevelPage']);
Route::get('/level/list',[LevelController::class,'ListLevelPage']);
Route::post('/level/delete',[LevelController::class,'EditLevelPage']);
