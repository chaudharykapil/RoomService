<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function AddLevelPage()
    {
        if(!session('admin')){
            return redirect('/');
        }
        return view("pages/newBuildingLevel");
    }
    public function EditLevelPage()
    {
        if(!session('admin')){
            return redirect('/');
        }
        return view("pages/viewLevel");
    }
    public function ListLevelPage()
    {
        if(!session('admin')){
            return redirect('/');
        }
        return view("pages/levelList");
    }
}
