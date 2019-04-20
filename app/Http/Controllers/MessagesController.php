<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;

class MessagesController extends Controller
{
    public function submit( Request $request) {
       
        $this->validate( $request, ['name' => 'required', 'email'=>'required'] );

        // Create new message

        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // Save Message

        $message->save();

        // Redirect

        return redirect('/')->with('status', 'Message Sent' );
    }

    public function showMessages() {

        $messages = Message::all();
        return view( 'messages', compact('messages') );
    }
}
