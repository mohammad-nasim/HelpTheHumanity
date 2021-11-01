<?php

namespace App\Http\Controllers\Frontend;

use App\AdditionalNews;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function allnews(){
        $this->data['allnews'] = News::Latest()->paginate(6);
        $this->data['add_news'] = AdditionalNews::first();

        return view('frontend.pages.news.all-news', $this->data);

    }

    public function singlenews($id){
        $this->data['news'] = News::find($id);
        $this->data['add_news'] = AdditionalNews::first();

        return view('frontend.pages.news.news', $this->data);
    }
}
