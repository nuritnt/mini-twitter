<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function showAll() {

       // gets all the entries from table messages
       // and gets an array of objects as a return value.
       // we store this return value in the variable $messages
       $messages = Message::all()->sortByDesc('created_at');

       // This line would output the messages in the UI/Browser
       // and stop the script execution.
       // good for debugging :)
       //dd($messages);

        // This function returns a view.
        // here the blade template engine works its magic again
        // through which can pass the $messages array to the view.
        // we can pass it as an optional second parameter (associative array)
        return view('messages', ['messages' => $messages]);
    }
}
