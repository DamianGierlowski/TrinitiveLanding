<?php

namespace App\Http\Controllers;

class PolicyController
{
    public function privacyPolicy()
    {
        return view('policy.privacy-policy');
    }

    public function cookiePolicy()
    {
        return view('policy.cookie-policy');
    }
}
