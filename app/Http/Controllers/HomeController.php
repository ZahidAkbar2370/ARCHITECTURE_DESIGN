<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorey;
use App\Models\Product;
use App\Models\Review;
use App\Models\SocialLink;
use App\Models\Message;

class HomeController extends Controller
{
    public function index()
    {
        $all_categoreies = Categorey::all();

        return view("App/home",["all_categoreies" => $all_categoreies]);
    }

    public function my_projects()
    {
        $all_projects = Product::all();

        return view("App/my_project",["all_projects" => $all_projects]);
    }

    public function project_detail($id)
    {
         $select_project = Product::find($id);

         return view("App/project_detail",["select_project" => $select_project]);
    }

    public function reviews()
    {
        $all_reviews = Review::all();
        
        return view("App/reviews",["all_reviews" => $all_reviews]);
    }


    public function product_by_categorey($id)
    {
        $all_projects = Product::where("categorey_id",$id)->get();

        $select_categorey = Categorey::find($id);

        
        // dd($all_projects);
        return view("App/product_by_categorey",["all_projects" => $all_projects,"select_categorey" => $select_categorey]);
    }


    public function contact_us()
    {
        $all_social_links = SocialLink::all();

        return view("App/contact_us",["all_social_links" => $all_social_links]);
    }


    public function save_message(Request $request)
    {
        $add_message = Message::create([
            'name' => $request->name,
            'sender_email' => $request->sender_email,
            'message' => $request->message,
        ]);

        return redirect("contact-us");
    }
}
