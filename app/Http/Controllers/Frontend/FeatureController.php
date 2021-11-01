<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Footer;
use App\Feature;
use App\AdditionalFeature;

class FeatureController extends Controller
{
    public function allfeature(){

        $this->data['allfeatures']    = Feature::latest()->paginate(6);
        $this->data['add_data']       = AdditionalFeature::first();

        return view('frontend.pages.features.all-features', $this->data);
    }

    public function singlefeature($id){

        $this->data['feature']        = Feature::find($id);
        $this->data['add_data']       = AdditionalFeature::first();

        return view('frontend.pages.features.feature', $this->data);
    }
}
