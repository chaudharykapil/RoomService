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
            return redirect('/room/list');;
        }
        return view("index");
    }
    public function Login(Request $req)
    {
        
        $email = $req->email;
        $pass = $req->password;
        $adm = Admin::where("email","=",$email)->get();
        if(count($adm)){
            if ($adm[0]->password == $pass && $adm[0]->provider == '') {
                session(["admin"=>$adm[0]->email]);
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
    public function redirectToProvider()
    {
        return Socialite::driver('google')->stateless()->redirect();
    }
    public function GoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();
        $adm = Admin::where("email",'=',$user->getEmail())->get();
        if (count($adm)){
            session(["admin"=>$adm[0]->email]);
            return redirect('/');
        }
        $newadm = new Admin;
        $newadm->email =  $user->getEmail();
        $newadm->password = "";
        $newadm->provider = "google";
        $newadm->save();
        session(["admin"=>$user->getEmail()]);
        return redirect('/');

    }
}
