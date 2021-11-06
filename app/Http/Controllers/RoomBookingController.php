<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RequestedRoom;
use App\Models\BookingDetail;
use App\Models\BookedRoom;
use App\Models\BookingCancelRequest;
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
    public function SelectRooms(Request $req)
    {
        $data =  $req->input();
        $rooms = Room::Where("max_size",">=",$data["size"])->Where("room_type","=",$data["room_type"])->Where("build_id","=",$data["build_id"])->get();
        $endtime = strtotime($data["pref_time"]) + $data["duration"]*60*60;
        $endtime = date('H:i', $endtime);
        
        for ($i=0; $i < count($rooms); $i++) {
            $rooms[$i]["location"] = $rooms[$i]["build_id"]."-".strval($rooms[$i]["level_no"])."-".strval($rooms[$i]["room_no"]);
            $rooms[$i]["description"] = $rooms[$i]["build_id"]." "."level ".strval($rooms[$i]["level_no"])." room ".strval($rooms[$i]["room_no"])."-".$rooms[$i]["room_type"]; 
        }
        $all_data = ["rooms"=>$rooms,"pref_time"=>$data["pref_time"],"end_time"=>$endtime,"date"=>$data["date"]];
        
        return view("staff/RoomSelection",compact("all_data"));
    }
    public function ShowDetailEntry(Request $req)
    {
        $data = $req->input();
        //return $data;
        $room = Room::Where("id","=",$data["room_id"])->get()[0];
        $room["location"] = $room["build_id"]."-".strval($room["level_no"])."-".strval($room["room_no"]);
        $all_data = ["room"=>$room,"pref_time"=>$data["pref_time"],"end_time"=>$data["end_time"],"date"=>$data["date"]];
        //return $all_data;
        return view("staff/DetailEntry",compact("all_data"));
    }
    public function ShowBookingReciept(Request $req)
    {
        $data = $req->input();
        //return $data;
        $book_detail = new BookingDetail;
        $book_detail->email = $data["email"];
        $book_detail->phone_no = $data["phone"];
        $book_detail->booking_size = $data["booking_size"];
        $book_detail->lname = $data["l_name"];
        $book_detail->fname = $data["f_name"];
        $book_detail->evt_desc = $data["desc"];
        $book_detail->department = $data["depart"];
        $book_detail->save();
        $req_room = new RequestedRoom;
        $req_room->room_id = $data["room_id"];
        $req_room->booking_detail_id = $book_detail["id"];
        $req_room->requested_date = $data["date"];
        $req_room->time_from = $data["pref_time"];
        $req_room->time_to = $data["end_time"];
        $req_room->save();

        $room = Room::Where("id","=",$data["room_id"])->get()[0];
        $location = $room["build_id"]."-".strval($room["level_no"])."-".strval($room["room_no"]);
        $all_data = ["location"=>$location,"pref_time"=>$data["pref_time"],"end_time"=>$data["end_time"],"date"=>$data["date"]];
        return view("staff/BookingReciept",compact("all_data"));
    }
    public function ShowStaffBooking()
    {
        $request_rooms = RequestedRoom::all();
        $bookedrooms = BookedRoom::all();
        for ($i=0; $i < count($request_rooms); $i++) {
            $room = Room::find($request_rooms[$i]["room_id"]);
            $request_rooms[$i]["location"] = $room["build_id"]."-".strval($room["level_no"])."-".strval($room["room_no"]);
            $request_rooms[$i]["description"] = $room["build_id"]." "."level ".strval($room["level_no"])." room ".strval($room["room_no"])."-".$room["room_type"]; 
        }
        for ($i=0; $i < count($bookedrooms); $i++) {
            $room = Room::find($bookedrooms[$i]["room_id"]);
            $bookedrooms[$i]["location"] = $room["build_id"]."-".strval($room["level_no"])."-".strval($room["room_no"]);
            $bookedrooms[$i]["description"] = $room["build_id"]." "."level ".strval($room["level_no"])." room ".strval($room["room_no"])."-".$room["room_type"];
        }

        return view("staff/StaffBooking",compact("request_rooms","bookedrooms"));
    }
    public function CancelRoom(Request $req)
    {
        $room_id = $req->input("id");
        $room = RequestedRoom::Where("room_id","=",$room_id)->get();
        if(count($room) == 0){
            $room = BookedRoom::Where("room_id","=",$room_id)->get();
            $cancel_Room = BookingCancelRequest::Where("booking_id","=",$room[0]->id)->get();
            if(count($cancel_Room) == 0){
                $cancel_Room = new BookingCancelRequest;
                $cancel_Room->booking_id = $room[0]->id;
                $cancel_Room->save();
            }
            return 0;
        }
        $detail = BookingDetail::find($room[0]["booking_detail_id"]);
        $room[0]->delete();
        $detail->delete();
        return 0;
    }
    public function GetRoomSizes()
    {
        $data_list = [];
        $data = Room::all();
        for ($i=0; $i < count($data); $i++) { 
            array_push($data_list,$data[$i]["max_size"]);
        }
        return $data_list;
    }
}
