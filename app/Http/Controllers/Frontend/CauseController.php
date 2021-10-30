<?php

namespace App\Http\Controllers\Frontend;

use App\AdditionalCause;
use App\Cause;
use App\PaymentMethod;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CauseController extends Controller
{
    public function allcause(){

        $this->data['allcause'] = Cause::latest()->paginate(4);
        $this->data['add_cause']    = AdditionalCause::first();

        return view('frontend.pages.causes.all-causes', $this->data);
    }

    public function singlecause($id){
        $this->data['singlecause'] = Cause::find($id);

       // dd($test->paymentmethod());

        return view('frontend.pages.causes.cause', $this->data);
    }
}
