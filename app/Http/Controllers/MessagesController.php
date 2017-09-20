<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message; //use message model

class MessagesController extends Controller
{
    public function submit(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required',
        ]);
        
        //create a new message model
        $message = new Message;

        //update the message model with data
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        //save message to db
        $message->save();

        //redirect to home with a message status to display on home.
        return redirect('/messages')->with('success', 'Message Sent');
    }

    public function getMessages() {
        //get all messages from DB
        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
