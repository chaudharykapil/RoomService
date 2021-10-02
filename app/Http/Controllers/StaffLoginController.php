<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
class StaffLoginController extends Controller
{
    public function ShowLoginPage()
    {
        if(session("staff")){
            return redirect('/staff/allbooking');
        }
        return view("staff/staffLogin");
    }
    public function StaffLogin(Request $req)
    {
        if(session("staff")){
            return redirect('/staff/allbooking');
        }
        $data = $req->input();
        $staff_id = $data["staff_id"];
        $password = $data["password"];
        $staff = Staff::Where("staff_id","=",$staff_id)->Where("password","=",$password)->get();
        if(count($staff)>0){
            session(["staff"=>$staff[0]]);
            return redirect("/staff/login");
        }
        else{
            session()->flash("message","Login Failed");
            return redirect('/staff/login');
        }
    }

    public function StaffLogout()
    {
        if(session("staff")){
            session()->forget("staff");
        }
        else {
            session()->flash("message","Already LogOut");
        }
        return redirect('/staff/login');
    }
}
