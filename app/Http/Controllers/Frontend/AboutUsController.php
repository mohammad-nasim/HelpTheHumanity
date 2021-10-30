<?php

namespace App\Http\Controllers\Frontend;

use App\AboutUs;
use App\AdditionalAboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutus(){

        $this->data['aboutus'] = AboutUs::all();
        $this->data['add_aboutus'] = AdditionalAboutUs::first();

        return view('frontend.pages.aboutus.about-us', $this->data);
    }
}
