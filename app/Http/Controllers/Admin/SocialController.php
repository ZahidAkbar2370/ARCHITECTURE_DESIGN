<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialLink;

class SocialController extends Controller
{
    public function create()
    {
        $all_social_links = SocialLink::all();

        return view("Admin/SocialLink/view_social_link",["all_social_links" => $all_social_links]);
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $update_social_link = SocialLink::find($id);

        $update_social_link->mobile_no = $request->mobile_no;
        $update_social_link->email_address = $request->email_address;
        $update_social_link->facebook = $request->facebook;
        $update_social_link->twitter = $request->twitter;
        $update_social_link->instagram = $request->instagram;
        $update_social_link->youtube = $request->youtube;
        $update_social_link->linkedin = $request->linkedin;

        $update_social_link->update();

        return redirect("admin-add-social-link");
    }
}
