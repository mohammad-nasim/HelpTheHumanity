<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Cause;
Use App\OurTeam;
use App\Event;

class DashboardController extends Controller
{
    public function dashboard(){

        $this->data['service'] = Service::count();
        $this->data['cause']   = Cause::count();
        $this->data['event']   = Event::count();
        $this->data['team']    = OurTeam::count();

        return view('backend.pages.dashboard', $this->data);
    }
}
