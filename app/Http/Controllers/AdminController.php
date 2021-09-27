<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Socialite;

class AdminController extends Controller
{
    public function showLoginPage()
    {
        if(session("admin")){
            return redirect('/room/list');
        }
        return view("index");
    }
    public function Login(Request $req)
    {
        
        $userid = $req->userid;
        $pass = $req->password;
        $adm = Admin::where("userid","=",$userid)->get();
        if(count($adm)){
            if ($adm[0]->password == $pass) {
                session(["admin"=>$adm[0]]);
                return redirect('/');
            }
            else {
                return "login failed";
            }
        }
        else {
            return "login failed";
        }
    }
    public function LogOut()
    {
        if (session("admin")){
            session()->forget("admin");
            return redirect('/');;
        }
        return "already logout";
    }
    
}
