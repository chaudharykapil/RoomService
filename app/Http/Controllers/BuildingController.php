<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;

class BuildingController extends Controller
{
    //----------------------------------------------------------------------------------------------------    
    public function AddBuildingPage()
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/');
        }
        return view("pages/newBuilding");
    }
//----------------------------------------------------------------------------------------------------
    public function createBuilding(Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/');
        }
        $data = $req->input();
        $newbuilding = new Building;
        $newbuilding->b_id = $data['b_id'];
        $newbuilding->b_name = $data['b_name'];
        try {
            $newbuilding->status = $data['status'] == 'on';
        } catch (\Throwable $th) {
            $newbuilding->status = false;
        }
        $newbuilding->save();
        session()->flash("message","Building added");
        return redirect("/building/list");
    }
//----------------------------------------------------------------------------------------------------    
    public function EditBuildingPage($id)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/');
        }
        $building = Building::find($id);
        if(!$building){
            abort(404);
        }
        return view("pages/editBuilding",compact("building"));
    }
//----------------------------------------------------------------------------------------------------
    public function updateBuilding($id,Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/');
        }
        $building = Building::find($id);
        if(!$building){
            abort(404);
        }
        $data = $req->input();
        $building->b_id = $data['b_id'];
        $building->b_name = $data['b_name'];
        try {
            $building->status = $data['status'] == 'on';
        } catch (\Throwable $th) {
            $building->status = false;
        }
        $building->save();
        session()->flash("message","Building update");
        return redirect('/building/list');
    }
//----------------------------------------------------------------------------------------------------
    public function deleteBuilding($id,Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/');
        }
        $building = Building::find($id);
        if(!$building){
            abort(404);
        }
        $building->delete();
        session()->flash("message","Building deleted");
        return redirect('/building/list');
    }
//----------------------------------------------------------------------------------------------------
    public function ListBuildingPage()
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/');
        }
        $all_buildings = Building::all();
        return view("pages/buildingList",compact("all_buildings"));
    }
}
