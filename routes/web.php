<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\StaffLoginController;
use App\Http\Controllers\RoomBookingController;
Route::get('/', function () {
    return view("mainpage");
});
//<-----------------------------------------Routes for Admin ---------------------------->

Route::get('/admin/login',[AdminController::class,'showLoginPage']);
Route::post('/admin/login',[AdminController::class,'Login']);
Route::get('/admin/logout',[AdminController::class,'LogOut']);

//<-----------------------------------------Routes for Rooms ---------------------------->

Route::get('/room/new',[RoomController::class,'AddRoomPage']);
Route::post('/room/new',[RoomController::class,'createRoom']);
Route::get('/room/edit/{id}',[RoomController::class,'EditRoomPage']);
Route::post('/room/edit/{id}',[RoomController::class,'updateRoom']);
Route::get('/room/list',[RoomController::class,'ListRoomPage']);
Route::get('/room/delete/{id}',[RoomController::class,'deleteRoom']);
Route::get('/room/requestedroom',[RoomController::class,'ShowRequestedRoom']);
Route::post('/room/accept',[RoomController::class,'AcceptRequestedRoom']);
Route::post('/room/deny',[RoomController::class,'DenyRequestedRoom']);
Route::get('/room/cancelrequest',[RoomController::class,'ShowCancelRequest']);
Route::post('/room/cancelrequest',[RoomController::class,'CancelRoom']);

//<-----------------------------------------Routes for Building ---------------------------->

Route::get('/building/new',[BuildingController::class,'AddBuildingPage']);
Route::post('/building/new',[BuildingController::class,'createBuilding']);
Route::get('/building/edit/{id}',[BuildingController::class,'EditBuildingPage']);
Route::post('/building/edit/{id}',[BuildingController::class,'updateBuilding']);
Route::get('/building/list',[BuildingController::class,'ListBuildingPage']);
Route::get('/building/delete/{id}',[BuildingController::class,'deleteBuilding']);

//<-----------------------------------------Routes for Levels ---------------------------->
Route::get('/level/new',[LevelController::class,'AddLevelPage']);
Route::post('/level/new',[LevelController::class,'createLevel']);
Route::get('/level/edit/{id}',[LevelController::class,'EditLevelPage']);
Route::post('/level/edit/{id}',[LevelController::class,'updateLevel']);
Route::get('/level/list',[LevelController::class,'ListLevelPage']);
Route::get('/level/delete/{id}',[LevelController::class,'deleteLevel']);

//<----------------------------------------Routes for Chat ---------------------------------->
Route::post('/sendmessage',[ChatController::class,'SendMessage']);
Route::get('/user', function () {
    $send_to = 1;
    return view("admin/userChat",compact("send_to"));
});

//<----------------------------------------Routes for Staff Login ----------------------------->
Route::get('/staff/login',[StaffLoginController::class,"ShowLoginPage"]);
Route::post('/staff/login',[StaffLoginController::class,"StaffLogin"]);
Route::get('/staff/logout',[StaffLoginController::class,"StaffLogout"]);
//<-----------------------------------------Routes for room Booking---------------------------->
Route::get('/staff/roombooking',[RoomBookingController::class,"ShowRoomBooking"]);
Route::post('/staff/roombooking',[RoomBookingController::class,"SelectRooms"]);
//<-----------------------------------------Routes for RoomSelection--------------------------->
//Route::get('/staff/roomselection',[RoomBookingController::class,"ShowRoomSelection"]);
//<-----------------------------------------Routes for Detail Entry---------------------------->
Route::post('/staff/detailentry',[RoomBookingController::class,"ShowDetailEntry"]);
//<-----------------------------------------Routes for Booking Reciept------------------------->
Route::post('/staff/bookingreciept',[RoomBookingController::class,"ShowBookingReciept"]);

//<-----------------------------------------Routes for room Booking---------------------------->
Route::get('/staff/allbooking',[RoomBookingController::class,"ShowStaffBooking"]);
Route::post("/staff/cancel",[RoomBookingController::class,"CancelRoom"]);
//<----------------------------------------Routes for Api ------------------------------------>
Route::get('/api/getBuildings',[BuildingController::class,"GetBuildingId"]);
Route::get('/api/getLevels/{id}',[LevelController::class,"GetLevelId"]);
Route::get("/api/getRoomsizes",[RoomBookingController::class,"GetRoomSizes"]);
