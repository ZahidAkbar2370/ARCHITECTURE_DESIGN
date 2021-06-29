<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorey;

class CategoreyController extends Controller
{
    public function index()
    {
        $all_categories = Categorey::all();

        return view("Admin/Categorey/view_categorey",["all_categories" => $all_categories]);
    }


    public function create()
    {
        return view("Admin/Categorey/add_categorey");
    }

    public function store(Request $request)
    {
        $thumbnail=$request->thumbnail;
        // dd($thumbnail);

        if(!empty($thumbnail))
        {

            $thumbnail = $request->File("thumbnail");
            // dd($thumbnail);
            $thumbnail->move("images/categoreyThumbnail",$thumbnail->getClientOriginalName());

            $add_categorey = Categorey::create([

            'categorey_name' => $request->categorey_name,
            'thumbnail' => $thumbnail->getClientOriginalName(),
            'publication_status' => $request->publication_status,

            ]); 
        }
        
        

        // $add_categorey = Categorey::create([
        //     'categorey_name' => $request->categorey_name,
        //     'publication_status' => $request->publication_status,
        // ]); 

        return redirect("admin-view-categorey");
    }

    public function destroy($id)
    {
        $delete_categorey = Categorey::find($id)->delete();

        return redirect("admin-view-categorey");
    }


    public function edit($id)
    {
        $edit_categorey = Categorey::find($id);

        return view("Admin/Categorey/edit_categorey",["edit_categorey" => $edit_categorey]);
    }


    public function update(Request $request,$id)
    {
        $thumbnail=$request->thumbnail;
        // dd($thumbnail);

        if(!empty($thumbnail))
        {

            $thumbnail = $request->File("thumbnail");
            
            $thumbnail->move("images/categoreyThumbnail",$thumbnail->getClientOriginalName());

            $update_categorey = Categorey::find($id);

            $update_categorey->categorey_name = $request->categorey_name;
            $update_categorey->thumbnail = $request->thumbnail->getClientOriginalName();

            $update_categorey->update();
        }
        else
        {
            $update_categorey = Categorey::find($id);

            $update_categorey->categorey_name = $request->categorey_name;

            $update_categorey->update();
        }
        

        return redirect("admin-view-categorey");

    }


    public function unapprove($id)
    {
        $update_status = Categorey::find($id);

        $update_status->publication_status = "0";

        $update_status->update();

        return redirect("admin-view-categorey");
    }


    public function approve($id)
    {
        $update_status = Categorey::find($id);

        $update_status->publication_status = "1";

        $update_status->update();

        return redirect("admin-view-categorey");
    }
}
