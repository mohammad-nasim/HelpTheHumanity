<?php

namespace App\Http\Controllers\Frontend;

use App\AdditionalService;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function allservice(){

        $this->data['allservice']             = Service::latest()->paginate(4);
        $this->data['add_data']               = AdditionalService::first();

        return view('frontend.pages.services.all-services', $this->data);
    }

    public function singleservice($id){

        $this->data['service'] = Service::find($id);

        return view('frontend.pages.services.service', $this->data);
    }
}
