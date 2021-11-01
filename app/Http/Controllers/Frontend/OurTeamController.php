<?php

namespace App\Http\Controllers\Frontend;

use App\AdditionalOurTeam;
use App\Http\Controllers\Controller;
use App\OurTeam;
use Illuminate\Http\Request;

class OurTeamController extends Controller
{
    public function ourteam(){

        $this->data['our_team']     = OurTeam::latest()->paginate(12);
        $this->data['add_our_team'] = AdditionalOurTeam::first();

        return view('frontend.pages.ourteam', $this->data);
    }
}
