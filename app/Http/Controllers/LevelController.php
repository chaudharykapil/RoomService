<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
//----------------------------------------------------------------------------------------------------    
    public function AddLevelPage()
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        return view("admin/newBuildingLevel");
    }
//----------------------------------------------------------------------------------------------------
    public function createLevel(Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        $data = $req->input();
        $newLevel = new Level;
        $newLevel->build_id = $data['build_id'];
        $newLevel->level_no = $data['level_no'];
        $newLevel->level_name = $data['level_name'];
        $newLevel->remark = "";
        try {
            $newLevel->status = $data['status'] == 'on';
        } catch (\Throwable $th) {
            $newLevel->status = false;
        }
        $newLevel->save();
        session()->flash("message","Level added");
        return redirect("/level/list");
    }
//----------------------------------------------------------------------------------------------------    
    public function EditLevelPage($id)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        $level = Level::find($id);
        if(!$level){
            abort(404);
        }
        return view("admin/editLevel",compact("level"));
    }
//----------------------------------------------------------------------------------------------------
    public function updateLevel($id,Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        $level = Level::find($id);
        if(!$level){
            abort(404);
        }
        $data = $req->input();
        $level->build_id = $data['build_id'];
        $level->level_no = $data['level_no'];
        $level->level_name = $data['level_name'];
        if ($data["remark"]) {
            $level->remark = $data["remark"];    
        }
        else{
            $level->remark = "";
        }
        try {
            $level->status = $data['status'] == 'on';
        } catch (\Throwable $th) {
            $level->status = false;
        }
        $level->save();
        session()->flash("message","Level update");
        return redirect('/level/list');
    }
//----------------------------------------------------------------------------------------------------
    public function deleteLevel($id,Request $req)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        $level = Level::find($id);
        if(!$level){
            abort(404);
        }
        $level->delete();
        session()->flash("message","Level deleted");
        return redirect('/level/list');
    }
//----------------------------------------------------------------------------------------------------
    public function ListLevelPage()
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        $all_levels = Level::all();
        return view("admin/levelList",compact("all_levels"));
    }
//----------------------------------------------------------------------------------------------------
    public function GetLevelId($id)
    {
        if(!session('admin')){
            session()->flash("message","Please Login First");
            return redirect('/admin/login');
        }
        $all_levels = Level::Where("build_id","=",$id)->Where("status","=",1)->get();
        $level_list = [];
        for ($i=0; $i < count($all_levels); $i++) { 
            array_push($level_list,$all_levels[$i]["level_no"]);
        }
        return $level_list;
    }
}