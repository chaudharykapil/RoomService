<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function ShowNotification()
    {
        if(!session("staff")){
            return redirect('/staff/login');
        }
        $user  = session("staff");
        $allnotification = Notification::Where("user_id","=",$user->staff_id)->get();
        return view("staff/notificationPage",compact("allnotification"));
    }
    public function readMsg(Request $req)
    {
        $id = $req->input("id");
        $notification = Notification::Where("id","=",$id)->get()[0];
        $notification->isread = 1;
        $notification->save();
        return 200;
    }
}
