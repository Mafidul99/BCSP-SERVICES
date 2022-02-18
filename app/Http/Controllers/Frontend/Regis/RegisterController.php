<?php

namespace App\Http\Controllers\Frontend\Regis;

use App\Http\Controllers\Controller;
use App\Models\OnlineRegister;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index()
    {
        return view('frontend.register.registerfrom');
    }
    public function store(Request $request)
    {

        $online_regis = new OnlineRegister;
        $online_regis->name = $request->input('name');
        $online_regis->fname = $request->input('fname');
        $online_regis->email = $request->input('email');
        $online_regis->phone = $request->input('phone');
        $online_regis->address = $request->input('address');
        $online_regis->city = $request->input('city');
        $online_regis->State = $request->input('State');
        $online_regis->zip = $request->input('zip');
        $online_regis->bname = $request->input('bname');
        $online_regis->gname = $request->input('gname');
        $online_regis->radio = $request->input('radio');
        $online_regis->filemanager = $request->input('filemanager');
        $online_regis->gridCheck = $request->input('gridCheck');

        $online_regis->save();
        //return redirect('/registerfrom')->with('status','Add Successfully  .... !');
        Alert::success('success','Add Successfully  .... !');
        return back()->with('/registerfrom');
    }
}
