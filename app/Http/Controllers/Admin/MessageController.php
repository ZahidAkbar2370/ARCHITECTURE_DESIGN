<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function index()
    {
        $all_messages = Message::all();

        return view("Admin/Message/view_message",["all_messages" => $all_messages]);
    }


    public function destroy($id)
    {
        $delete_message = Message::find($id)->delete();

        return redirect("admin-view-messages");
    }
}
