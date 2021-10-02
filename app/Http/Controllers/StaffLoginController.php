<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffLoginController extends Controller
{
    public function ShowLoginPage()
    {
        return view("staff/staffLogin");
    }
}
