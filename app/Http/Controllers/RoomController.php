<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function AddRoomPage()
    {
        if(!session('admin')){
            return redirect('/');
        }
        return view("pages/newRoom");
    }
    public function createRoom(Request $req)
    {
        if(!session('admin')){
            return redirect('/');
        }
        $data = $req->input();
        $newRoom = new Room;
        $newRoom->build_id = $data['build_id'];
        $newRoom->level_no = $data['level_no'];
        $newRoom->room_no = $data['room_no'];
        $newRoom->room_name = $data['room_name'];
        $newRoom->room_type = $data['room_type'];
        try {
            $newRoom->status = $data['status'] == 'on';
        } catch (\Throwable $th) {
            $newRoom->status = false;
        }
        $newRoom->save();

        return redirect("/room/list");
    }
    public function EditRoomPage($id)
    {
        if(!session('admin')){
            return redirect('/');
        }
        $room = Room::find($id);
        if(!$room){
            abort(404);
        }
        session()->flash("message","this is message");
        return view("pages/editRoom",compact("room"));
    }
    public function ListRoomPage()
    {
        if(!session('admin')){
            return redirect('/');
        }
        $all_rooms = Room::all();
        return view("pages/roomList",compact("all_rooms"));
    }
}
