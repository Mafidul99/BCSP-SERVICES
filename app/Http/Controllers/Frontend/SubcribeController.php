<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Notification\Subscribe;
use Illuminate\Http\Request;

use Alert;
use Mail;


class SubcribeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function  Send(Request $request)
    {
        $subscribe =[
            'email' =>$request->email
        ];
        //Mail::to('mafidul.peindia@gmail.com')->send(new Subscribe($subscribe));
        Alert()->success('Thanks..!','Your Subscribe Successfully....!');
        return back()->with('/index');
    }
}
