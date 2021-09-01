<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function AddLevelPage()
    {
        return view("pages/newBuildingLevel");
    }
    public function EditLevelPage()
    {
        return view("pages/viewLevel");
    }
}
