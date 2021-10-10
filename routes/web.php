<?php

use Illuminate\Support\Facades\Auth;
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
})->name('webhome');

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

//Our Team
Route::get('/ourteam', function(){
    return view('frontend.pages.ourteam');
});



/// Backend Controllers ////////////////////////////////////////////////////

//CustomAuthConfig

Route::get('/login2', function(){
    return view('auth.customauth.login');
});

Route::get('/forgotpass', function(){
    return view('auth.customauth.forgotpassword');
});

Route::get('/register2', function(){
    return view('auth.customauth.register');
});


//Backend-Contact
Route::post('message', 'Backend\MsgController@store')->name('contact.message');

Route::group(['prefix' => 'admin/' ,'middleware' => 'auth'], function(){
    Route::get('dashboard', function(){
        return view('backend.pages.dashboard');
    });

    Route::resource('herosection', 'Backend\HeroSectionController');

    Route::resource('feature', 'Backend\FeatureController');
    Route::resource('additionalfeature', 'Backend\AdditionalFeatureController');

    Route::resource('aboutus','Backend\AboutUsController');
    Route::resource('additionalaboutus', 'Backend\AdditionalAboutUsController', ['except' => ['create', 'store' ]]);

    Route::resource('service','Backend\ServiceController');
    Route::resource('additionalservice', 'Backend\AdditionalServiceController', ['except' => ['create', 'store' ]]);

    Route::resource('gallery', 'Backend\GalleryController');
    Route::resource('additionalgallery', 'Backend\AdditionalGalleryController', ['except' => ['create', 'store' ]]);

    Route::resource('funfactor', 'Backend\FunFactorController', ['except' => ['create', 'store', 'destroy' ]]);

    Route::resource('ourteam', 'Backend\OurTeamController');
    Route::resource('additionalourteam', 'Backend\AdditionalOurTeamController', ['except' => ['create', 'store', 'destroy' ]]);

    Route::resource('event', 'Backend\EventController');
    Route::resource('additionalevent', 'Backend\AdditionalEventController', ['except' => ['create', 'store', 'destroy' ]]);

    Route::resource('partner', 'Backend\PartnerController');

    Route::resource('news', 'Backend\NewsController');
    Route::resource('additionalnews', 'Backend\AdditionalNewsController', ['except' => ['create', 'store', 'destroy' ]]);

    Route::resource('contact', 'Backend\ContactController');
    Route::resource('additionalcontact', 'Backend\AdditionalContactController', ['except' => ['create', 'store', 'destroy' , 'show']]);

    Route::resource('footer', 'Backend\FooterController', ['except' => ['create', 'store', 'destroy' ]]);

    Route::resource('donatenow', 'Backend\DonateNowController', ['except' => ['create', 'store', 'destroy' ]]);
    Route::resource('additionaldonatenow', 'Backend\AdditionalDonateNowController', ['except' => ['create', 'store', 'destroy' ]]);

    Route::resource('cause', 'Backend\CauseController');

    Route::resource('paymentmethod', 'Backend\PaymentMethodController');

});

