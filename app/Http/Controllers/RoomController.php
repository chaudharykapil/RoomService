<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RequestedRoom;
use App\Models\BookingDetail;
use App\Models\BookedRoom;
use App\Models\BookingCancelRequest;
class RoomController extends Controller
{
    public function AddRoomPage()
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        return view("admin/newRoom");
    }

    public function createRoom(Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        $data = $req->input();
        $newRoom = new Room;
        $newRoom->build_id = $data['build_id'];
        $newRoom->level_no = $data['level_no'];
        $newRoom->room_no = $data['room_no'];
        $newRoom->max_size = $data['max_size'];
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
            return redirect('/admin/login');
        }
        $room = Room::find($id);
        if(!$room){
            abort(404);
        }
        return view("admin/editRoom",compact("room"));
    }

    public function updateRoom($id,Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
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
            return redirect('/admin/login');
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
            return redirect('/admin/login');
        }
        $all_rooms = Room::all();
        $send_to = 2;
        return view("admin/roomList",compact("all_rooms","send_to"));
    }
    public function ShowRequestedRoom(){
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        $all_rooms = RequestedRoom::all();
        for ($i=0; $i < count($all_rooms); $i++) { 
            $roomid = $all_rooms[$i]["room_id"];
            $room = Room::find($roomid);
            $all_rooms[$i]["location"] = $room["build_id"]."-".strval($room["level_no"])."-".strval($room["room_no"]);
            $detailid = $all_rooms[$i]["booking_detail_id"];
            $detail = BookingDetail::find($detailid);
            $all_rooms[$i]["size"] = $detail["booking_size"];
            $all_rooms[$i]["description"] = $detail["evt_desc"];
        }
        //return $all_rooms;
        return view("admin/requestedRoom",compact("all_rooms"));
    }
    public function AcceptRequestedRoom(Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return null;
        }
        $reqroom = RequestedRoom::find($req->input("id"));
        $bookroom = new BookedRoom;
        $bookroom->room_id = $reqroom->room_id;
        $bookroom->booking_detail_id = $reqroom->booking_detail_id;
        $bookroom->requested_date = $reqroom->requested_date;
        $bookroom->time_from = $reqroom->time_from;
        $bookroom->time_to = $reqroom->time_to;  
        $bookroom->save();
        $reqroom->delete();
        return $bookroom;
    }
    public function DenyRequestedRoom(Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return null;
        }
        $reqroom = RequestedRoom::find($req->input("id"));
        $detail = BookingDetail::find($reqroom["booking_detail_id"]);
        $reqroom->delete();
        $detail->delete();
        return 0;
    }
    public function ShowCancelRequest()
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        $rooms = BookingCancelRequest::all();
        $all_rooms = [];
        for ($i=0; $i < count($rooms); $i++) {
            $room = BookedRoom::find($rooms[$i]->booking_id);
            $detail = BookingDetail::find($room["booking_detail_id"]);
            $room["booking_size"] = $detail["booking_size"];
            $room["evt_desc"] = $detail["evt_desc"];
            $room["cancel_id"] = $rooms[$i]["id"];
            array_push($all_rooms,$room);
        }
        return view("admin/cancelRequestRoom",compact("all_rooms"));
    }
    public function CancelRoom(Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return null;
        }
        $cancel_id = $req->input("id");
        $cancel_req =BookingCancelRequest::find($cancel_id);
        $booking = BookedRoom::find($cancel_req["booking_id"]);
        $detail = BookingDetail::find($booking["booking_detail_id"]);
        $booking->delete();
        $detail->delete();
        $cancel_req->delete();
        return 0;
    }
}
