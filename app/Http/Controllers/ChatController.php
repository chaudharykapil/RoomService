<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Events\MessageSend;
class ChatController extends Controller
{
    public function SendMessage(Request $req)
    {
        $data = $req->input();
        $msg = new Message;
        $msg->sender_id = $data['sender_id'];
        $msg->reciever_id = $data['send_to'];
        $msg->message = $data['message'];
        if ($data["message"] == null) {
            $msg->message = "";
        }        
        $msg->save();
        broadcast(new MessageSend($msg))->toOthers();
        return "done";
    }
    public function getMessages(Request $req)
    {
        $data =  $req->input();
        $messages = Message::Where("sender_id","=",$data["sender_id"])->Where("reciever_id","=",$data["reciever_id"])->orWhere("sender_id","=",$data["reciever_id"])->Where("reciever_id","=",$data["sender_id"])->orderBy('created_at')->get();
        return $messages;

    }
}
