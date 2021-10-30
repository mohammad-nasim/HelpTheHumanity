<?php

namespace App\Http\Controllers\Frontend;

use App\Feature;
use App\AboutUs;
use App\HeroSection;
use App\Service;
use App\DonateNow;
use App\Cause;
use App\Gallery;
use App\News;
use App\OurTeam;
use App\Partner;
use App\Event;
use App\Footer;
use App\FunFactor;

use App\AdditionalAboutUs;
use App\AdditionalCause;
use App\AdditionalContact;
use App\AdditionalDonateNow;
use App\AdditionalEvent;
use App\AdditionalGallery;
use App\AdditionalNews;
use App\AdditionalOurTeam;
use App\AdditionalService;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class FrontendController extends Controller
{
    //View Home
    public function index(){
        $this->data['herosection']     = HeroSection::first();
        $this->data['features']        = Feature::latest()->take(3)->get();;

        $this->data['aboutus']         = AboutUs::get()->take(5);
        $this->data['add_aboutus']     = AdditionalAboutUs::first();

        $this->data['service']         = Service::latest()->take(6)->get();;
        $this->data['add_service']     = AdditionalService::first();

        $this->data['donate_now']      = DonateNow::first();
        $this->data['add_donate_now']  = AdditionalDonateNow::first();

        $this->data['cause']           = Cause::latest()->take(3)->get();;
        $this->data['add_cause']       = AdditionalCause::first();

        $this->data['gallery']         = Gallery::latest()->take(6)->get();
        $this->data['add_gallery']     = AdditionalGallery::first();

        $this->data['funfactor']       = FunFactor::get()->take(4);
        $this->data['funfactor_img']   = FunFactor::first();

        $this->data['ourteam']         = OurTeam::get()->take(4);
        $this->data['add_ourteam']     = AdditionalOurTeam::first();

        $this->data['event']           = Event::latest()->take(2)->get();
        $this->data['add_event']       = AdditionalEvent::first();

        $this->data['partner']         = Partner::first();

        $this->data['news']            = News::latest()->take(2)->get();
        $this->data['add_news']        = AdditionalNews::first();

        $this->data['add_contact']     = AdditionalContact::first();

        $this->data['footer']          = Footer::first();

        return view('frontend.pages.home', $this->data);
    }




}
