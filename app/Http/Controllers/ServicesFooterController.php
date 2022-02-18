<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesFooterController extends Controller
{
    public function FooterServices()
    {
        return view('frontend.footerPage.services_footer');
    }
}
