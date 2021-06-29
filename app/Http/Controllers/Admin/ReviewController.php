<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $all_reviews = Review::all();

        return view("Admin/Review/view_review",["all_reviews" => $all_reviews]);
    }

    public function create()
    {
        return view("Admin/Review/add_review");
    }


     public function store(Request $request)
    {
        $review_image = $request->review_image;
        // dd($thumbnail);

        if(!empty($review_image))
        {

            $review_image = $request->File("review_image");
            // dd($thumbnail);
            $review_image->move("images/reviewImages",$review_image->getClientOriginalName());

            $add_review = Review::create([

            'review_image' => $review_image->getClientOriginalName(),
            'publication_status' => $request->publication_status,

            ]); 
        }
        
        return redirect("admin-view-review");
    }

    public function destroy($id)
    {
        $delete_review = Review::find($id)->delete();

        return redirect("admin-view-review");
    }

    public function unapprove($id)
    {
        $update_status = Review::find($id);

        $update_status->publication_status = "0";

        $update_status->update();

        return redirect("admin-view-review");
    }


    public function approve($id)
    {
        $update_status = Review::find($id);

        $update_status->publication_status = "1";

        $update_status->update();

        return redirect("admin-view-review");
    }

}
