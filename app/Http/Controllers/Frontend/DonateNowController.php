<?php

namespace App\Http\Controllers\Frontend;

use App\DonateNow;
use App\AdditionalDonateNow;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonateNowController extends Controller
{
    public function donatenow(){

        $this->data['donatenow']     = DonateNow::first();
        $this->data['add_donatenow'] = AdditionalDonateNow::first();


        return view('frontend.pages.donate-now', $this->data);
    }
}
