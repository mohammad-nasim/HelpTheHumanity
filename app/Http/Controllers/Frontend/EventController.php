<?php

namespace App\Http\Controllers\Frontend;

use App\AdditionalEvent;
use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function allevent(){
        $this->data['allevent'] = Event::Latest()->paginate(6);
        $this->data['add_event'] = AdditionalEvent::first();

        return view('frontend.pages.events.all-events', $this->data);

    }

    public function singleevent($id){
        $this->data['event'] = Event::find($id);
        $this->data['add_event'] = AdditionalEvent::first();

        return view('frontend.pages.events.event', $this->data);
    }
}
