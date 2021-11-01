<?php

namespace App\Http\Controllers\Frontend;

use App\Gallery;
use App\AdditionalGallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery(){

        $this->data['gallery'] = Gallery::latest()->paginate(12);
        $this->data['add_gallery'] = AdditionalGallery::first();

        return view('frontend.pages.gallery', $this->data);
    }
}
