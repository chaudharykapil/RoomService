<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function AddRoomPage()
    {
        return view("pages/newRoom");
    }
    public function EditRoomPage()
    {
        return view("pages/viewRoom");
    }
}
