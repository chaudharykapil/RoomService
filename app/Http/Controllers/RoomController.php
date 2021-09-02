<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomController extends Controller
{
    public function AddRoomPage()
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/');
        }
        return view("pages/newRoom");
    }

    public function createRoom(Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
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
        session()->flash("message","Room added");
        return redirect("/room/list");
    }

    public function EditRoomPage($id)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/');
        }
        $room = Room::find($id);
        if(!$room){
            abort(404);
        }
        return view("pages/editRoom",compact("room"));
    }

    public function updateRoom($id,Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/');
        }
        $room = Room::find($id);
        if(!$room){
            abort(404);
        }
        $data = $req->input();
        $room->build_id = $data['build_id'];
        $room->level_no = $data['level_no'];
        $room->room_no = $data['room_no'];
        $room->room_name = $data['room_name'];
        $room->room_type = $data['room_type'];
        try {
            $room->status = $data['status'] == 'on';
        } catch (\Throwable $th) {
            $room->status = false;
        }
        $room->save();
        session()->flash("message","Room update");
        return redirect('/room/list');
    }
    public function deleteRoom($id,Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/');
        }
        $room = Room::find($id);
        if(!$room){
            abort(404);
        }
        $room->delete();
        session()->flash("message","Room deleted");
        return redirect('/room/list');
    }
    public function ListRoomPage()
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/');
        }
        $all_rooms = Room::all();
        return view("pages/roomList",compact("all_rooms"));
    }
}
