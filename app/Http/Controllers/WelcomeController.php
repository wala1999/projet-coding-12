<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portfolio;
use App\Testimonial;
use App\Service;
use App\Slider;
use App\Contact;
use App\Footer;
use App\Map;



class WelcomeController extends Controller
{
    public function show()
    {
        return view('welcome');
    }
    public function index(){
        
           $portfolios=Portfolio::all();
           $testimonials=Testimonial::all();
           $services=Service::all();
           $sliders=Slider::all();
           $contacts=Contact::all();
           $footers=Footer::all();
           $maps=Map::all();
   
           


        return view('welcome',compact('portfolios','testimonials','services','sliders','contacts','footers','maps'));
           
    }
    

}
