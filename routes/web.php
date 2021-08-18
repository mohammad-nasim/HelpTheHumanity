<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/// Frontend Controllers ////////////////////////////////////////////////////

Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::get('/gallery', function () {
    return view('frontend.pages.gallery');
});

Route::get('/donate-now', function () {
    return view('frontend.pages.donate-now');
});

Route::get('/about-us', function () {
    return view('frontend.pages.aboutus.about-us');
});

//subfolders - services
Route::get('/all-services', function () {
    return view('frontend.pages.services.all-services');
});

Route::get('/service', function () {
    return view('frontend.pages.services.service');
});

//subfolders - news
Route::get('/all-news', function () {
    return view('frontend.pages.news.all-news');
});

Route::get('/news', function () {
    return view('frontend.pages.news.news');
});

//subfolders - features
Route::get('/all-features', function () {
    return view('frontend.pages.features.all-features');
});

Route::get('/feature', function () {
    return view('frontend.pages.features.feature');
});

//subfolders - events
Route::get('/all-events', function () {
    return view('frontend.pages.events.all-events');
});

Route::get('/event', function () {
    return view('frontend.pages.events.event');
});

//subfolders - causes
Route::get('/all-causes', function () {
    return view('frontend.pages.causes.all-causes');
});

Route::get('/cause', function () {
    return view('frontend.pages.causes.cause');
});



/// Backend Controllers ////////////////////////////////////////////////////
