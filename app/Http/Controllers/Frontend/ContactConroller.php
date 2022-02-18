<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\SentMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Alert;




class ContactConroller extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }
    public function  Send(Request $request)
    {

        $data =[
            'name' => $request->name,
            'phone' =>$request->phone,
            'email' =>$request->email,
            'message' => $request->message,
        ];
        Mail::to('mafidul.peindia@gmail.com')->send(new SentMail($data));
        Alert()->success('Thanks..!','Your Message has been sent Successfully....!');
        return back()->with('/contact');

    }
}

