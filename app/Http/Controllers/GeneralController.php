<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    // Página Privacy Policy
    public function privacyPolicy()
    {
        return view('general.privacy-policy');
    }

    // Página Terms of Use
    public function termsOfUse()
    {
        return view('general.terms-of-use');
    }
}
