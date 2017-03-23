<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.index');
    }

    public function store(ContactFormRequest $request)
    {
    	\Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('Visitor@visitor.com');
        $message->to('****@gmail.com', 'Admin')->subject('Feedback message');
    });

  return \Redirect::route('contact')->with('message', 'Thanks for contacting us!');
    }
}
