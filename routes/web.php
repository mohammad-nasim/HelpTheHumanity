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

Route::get('/', 'Frontend\FrontendController@index')->name('webhome');

//Feature Controller
Route::get('/all-features', 'Frontend\FeatureController@allfeature')->name('allfeature');
Route::get('/feature/{id}', 'Frontend\FeatureController@singlefeature')->name('feature');

//About-Us Controller
Route::get('/about-us', 'Frontend\AboutUsController@aboutus')->name('about-us');

//Service Controller
Route::get('/all-services', 'Frontend\ServiceController@allservice')->name('allservice');
Route::get('/service/{id}', 'Frontend\ServiceController@singleservice')->name('service');

//Donate-Now Controller
Route::get('/donate-now', 'Frontend\DonateNowController@donatenow')->name('donate-now');

//Cause Controller
Route::get('/all-causes', 'Frontend\CauseController@allcause')->name('all-cause');
Route::get('/cause/{id}', 'Frontend\CauseController@singlecause')->name('cause');

//Gallery Controller
Route::get('/gallery', 'Frontend\GalleryController@gallery')->name('gallery');

//OurTeam Controller
Route::get('/our-team', 'Frontend\OurTeamController@ourteam')->name('our-team');

//Event Controller
Route::get('/all-event', 'Frontend\EventController@allevent')->name('all-event');
Route::get('/event/{id}', 'Frontend\EventController@singleevent')->name('event');

//News Controller
Route::get('/all-news', 'Frontend\NewsController@allnews')->name('all-news');
Route::get('/news/{id}', 'Frontend\NewsController@singlenews')->name('news');




/// Backend Controllers ////////////////////////////////////////////////////

//CustomAuthConfig

// Route::get('/login2', function(){
//     return view('auth.customauth.login');
// });

// Route::get('/forgotpass', function(){
//     return view('auth.customauth.forgotpassword');
// });

// Route::get('/register2', function(){
//     return view('auth.customauth.register');
// });


//Backend-Contact
Route::post('message', 'Backend\MsgController@store')->name('contact.message');

Route::group(['prefix' => 'admin/' ,'middleware' => 'auth'], function(){

    Route::get('dashboard', 'Backend\DashboardController@dashboard')->name('dashboard');

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
    Route::resource('additionalcause', 'Backend\AdditionalCauseController', ['except' => ['create', 'store', 'destroy' ]]);

    Route::resource('paymentmethod', 'Backend\PaymentMethodController');

    //Profile Controller
    Route::get('profile', 'Backend\ProfileController@index')->name('profile.index');
    Route::get('create-admin', 'Backend\ProfileController@create')->name('profile.create');
    Route::post('store', 'Backend\ProfileController@store')->name('profile.store');
    Route::get('edit-admin/{id}', 'Backend\ProfileController@edit')->name('profile.edit');
    Route::post('update-admin/{id}', 'Backend\ProfileController@update')->name('profile.update');
    Route::get('delete-admin/{id}', 'Backend\ProfileController@delete')->name('profile.delete');
});

