<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function AddBuildingPage()
    {
        return view("pages/newBuilding");
    }
    public function EditBuildingPage()
    {
        return view("pages/viewBuilding");
    }
}
