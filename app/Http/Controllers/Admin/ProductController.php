<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorey;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $all_products = Product::all();

        return view("Admin/Product/view_product",["all_products" => $all_products]);
    }


    public function create()
    {
        $all_categories = Categorey::all();

        return view("Admin/Product/add_product",["all_categories" => $all_categories]);
    }

    public function store(Request $request)
    {
        $thumbnail=$request->thumbnail;
        // dd($thumbnail);

        if(!empty($thumbnail))
        {

            $thumbnail=$request->file("thumbnail");

            $thumbnail->move("images/productThumbnail",$thumbnail->getClientOriginalName());

             $add_product = Product::create([

            'title' => $request->title,
            'thumbnail' => $thumbnail->getClientOriginalName(),
            'categorey_id' => $request->categorey_name,
            'publication_status' => $request->publication_status,
            
            ]);
        }
        else
        {
            $add_project = Product::create([

            'title' => $request->title,
            'categorey_id' => $request->categorey_name,
            'publication_status' => $request->publication_status,
            
            ]);
        }
        

        return redirect("admin-view-product");
    }

    public function destroy($id)
    {
        $delete_product = Product::find($id)->delete();

        return redirect("admin-view-product");
    }


    public function edit($id)
    {
        $edit_product = Product::find($id);

        $all_categories = Categorey::all();

        return view("Admin/Product/edit_product",["edit_product" => $edit_product, "all_categories" => $all_categories]);
    }


    public function update(Request $request,$id)
    {
        $update_product = Product::find($id);

        if($request->hasFile("thumbnail"))
        {
             $thumbnail=$request->file("thumbnail");
             $thumbnail->move("images/productThumbnail",$thumbnail->getClientOriginalName());

            $update_product->title = $request->title;
            $update_product->categorey_id = $request->categorey_name;
            $update_product->thumbnail = $request->thumbnail->getClientOriginalName();
            
            $update_product->update();
        }
        else
        {
            $update_product->title = $request->title;
            $update_product->categorey_id = $request->categorey_name;
            
            $update_product->update();
        }


        return redirect("admin-view-product");

    }


    public function unapprove($id)
    {
        $update_status = Product::find($id);

        $update_status->publication_status = "0";

        $update_status->update();

        return redirect("admin-view-product");
    }


    public function approve($id)
    {
        $update_status = Product::find($id);

        $update_status->publication_status = "1";

        $update_status->update();

        return redirect("admin-view-product");
    }
}
