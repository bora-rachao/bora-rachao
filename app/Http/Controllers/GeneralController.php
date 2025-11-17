<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function privacyPolicy()
    {
        return view('general.privacy-policy');
    }

    public function termsOfUse()
    {
        return view('general.terms-of-use');
    }


    public function contact()
    {
        return view('general.contact');
    }
}
