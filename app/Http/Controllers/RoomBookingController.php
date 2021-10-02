<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomBookingController extends Controller
{
    public function ShowRoomBooking()
    {
        return view("staff/RoomBooking");
    }

    public function ShowRoomSelection()
    {
        return view("staff/RoomSelection");
    }
    public function ShowDetailEntry()
    {
        return view("staff/DetailEntry");
    }
    public function ShowBookingReciept()
    {
        return view("staff/BookingReciept");
    }
    public function ShowStaffBooking()
    {
        return view("staff/StaffBooking");
    }
}
