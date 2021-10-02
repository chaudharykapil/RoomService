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
        return view("admin/AdminLogin");
    }
    public function Login(Request $req)
    {
        $userid = $req->userid;
        $pass = $req->password;
        $adm = Admin::where("userid","=",$userid)->get();
        if(count($adm)){
            if ($adm[0]->password == $pass) {
                session(["admin"=>$adm[0]]);
                return redirect('/admin/login');
            }
            else {
                session()->flash("message","Login Failed");
                return redirect('/admin/login');
            }
        }
        else {
            session()->flash("message","Login Failed");
            return redirect('/admin/login');
        }
    }
    public function LogOut()
    {
        if (session("admin")){
            session()->forget("admin");
            return redirect('/admin/login');
        }
        session()->flash("message","Already Logout");
        return redirect('/admin/login');
    }
    
}
