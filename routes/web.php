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
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('/', function () {
    return view('index');
});
Route::get('/', 'WelcomeController@index')->name('Welcome');


Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/contact', function () {
    return view('contact')->name('contacts');
});

// Ressources Portfolio
Route::resource('portfolio', 'PortfolioController');
Route::get('/portfolioedit', 'PortfolioController@show')->name('portfolios');
Route::get('/portfolioedit/{id}/edit', 'PortfolioController@edit');
Route::post('/portfolioedit/{id}/update', 'PortfolioController@update');
//portfolio create
Route::get('/portfolioedit/create', 'PortfolioController@create');
Route::post('/portfolioedit/store', 'PortfolioController@store');
Route::get('portfolioedit/{id}/destroy','PortfolioController@destroy');
// Ressources Slider
Route::resource('slider', 'SliderController');
Route::get('/slideredit', 'SliderController@show')->name('sliders');
Route::get('/slideredit/{id}/edit', 'SliderController@edit');
Route::post('slideredit/{id}/update', 'SliderController@update');
//portfolio create
Route::get('/slideredit/create', 'SliderController@create');
Route::post('/slideredit/store', 'SliderController@store');
Route::get('slideredit/{id}/destroy','SliderController@destroy');
// Ressources About

Route::resource('about', 'AboutController')->middleware('admin');

// Ressources Services
Route::resource('service', 'ServiceController');
Route::get('/serviceedit', 'ServiceController@show')->name('services');
Route::get('/serviceedit/{id}/edit', 'ServiceController@edit');
Route::post('/serviceedit/{id}/update', 'ServiceController@update');
//portfolio create
Route::get('/serviceedit/create', 'ServiceController@create');
Route::post('/serviceedit/store', 'ServiceController@store');
Route::get('serviceedit/{id}/destroy','ServiceController@destroy');



// Ressources Testimonial
Route::get('/testimonialedit', 'TestimonialController@show')->name('testimonials');
Route::get('/testimonialedit/create', 'TestimonialController@create');
Route::resource('testimonial', 'TestimonialController');
// Ressources Contact
Route::get('/contactedit', 'ContactController@show')->name('contacts');
Route::get('/contactedit/create', 'ContactController@create');
Route::resource('contact', 'ContactController');
// Ressources Footer
Route::get('/footeredit', 'FooterController@show')->name('footers');
Route::get('/footeredit/create', 'FooterController@create');
Route::resource('footer', 'FooterController');
// Ressources Footer
Route::get('/mapedit', 'MapController@show')->name('maps');
Route::get('/mapedit/create', 'MapController@create');
Route::resource('map', 'MapController');

//Envoi du Mail
Route::resource('mail', 'MailController');


Route::post('mail', 'MailController@store');





