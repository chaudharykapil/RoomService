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
        return view("admin/newBuilding");
    }
//----------------------------------------------------------------------------------------------------
    public function createBuilding(Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        $data = $req->input();
        $newbuilding = new Building;
        $newbuilding->b_id = $data['b_id'];
        $newbuilding->b_name = $data['b_name'];
        $newbuilding->remark = "";
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
            return redirect('/admin/login');
        }
        $building = Building::find($id);
        if(!$building){
            abort(404);
        }
        return view("admin/editBuilding",compact("building"));
    }
//----------------------------------------------------------------------------------------------------
    public function updateBuilding($id,Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        $building = Building::find($id);
        if(!$building){
            abort(404);
        }
        $data = $req->input();
        $building->b_id = $data['b_id'];
        $building->b_name = $data['b_name'];
        if ($data["remark"]) {
            $building->remark = $data["remark"];    
        }
        else{
            $building->remark = "";
        }        
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
            return redirect('/admin/login');
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
            return redirect('/admin/login');
        }
        $all_buildings = Building::all();
        return view("admin/buildingList",compact("all_buildings"));
    }
//---------------------------------------------------------------------------------------------------
    public function GetBuildingId()
    {
        $id_list = [];
        $all_buildings = Building::Where("status","=",1)->get();
        for ($i=0; $i < count($all_buildings); $i++) { 
            array_push($id_list,$all_buildings[$i]["b_id"]);
        }
        return $id_list;
    }
}
