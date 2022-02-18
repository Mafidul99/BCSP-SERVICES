<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\GetModel;
use Illuminate\Http\Request;
use Alert;
use Illuminate\Support\Facades\DB;

class GetQuoteController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function store(Request $request)
    {

        $get_quote = new GetModel();
        $get_quote->fname = $request->input('fname');
        $get_quote->lname = $request->input('lname');
        $get_quote->mobile = $request->input('mobile');
        $get_quote->services = $request->input('services');
        $get_quote->message = $request->input('message');
        $get_quote->save();
        Alert()->success('Success', 'Your Message has been sent Successfully....!');
        return back()->with('/');
    }
}
