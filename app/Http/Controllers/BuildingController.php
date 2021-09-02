<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;

class BuildingController extends Controller
{
    public function AddBuildingPage()
    {
        if(!session('admin')){
            return redirect('/');
        }
        return view("pages/newBuilding");
    }
    public function EditBuildingPage()
    {
        if(!session('admin')){
            return redirect('/');
        }
        return view("pages/viewBuilding");
    }
    public function createBuilding(Request $req)
    {
        if(!session('admin')){
            return redirect('/');
        }
        $build = new Building;
        $data = $req->input();
        $build->b_id = $data['build_id'];
        $build->b_name = $data['build_name'];
        try {
            $build->status = $data['status'] == "on";
        } catch (\Throwable $th) {
            $build->status = false;
        }
        $build->save();
        return redirect('/building/new');
    }
    public function ListBuildingPage()
    {
        if(!session('admin')){
            return redirect('/');
        }
        return view("pages/buildingList");
    }
}
