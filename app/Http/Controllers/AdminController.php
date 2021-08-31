<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLoginPage()
    {
        return view("index");
    }
    public function Login(Request $req)
    {
        return $req->input();
    }
}
