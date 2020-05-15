<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class TestimonialController extends Controller
{
    public function show(){
        $testimonials = Testimonial::all();
         return view('testimonial.testimonialedit', compact('testimonials'));
      }
   
//function edit
      public function edit($id){
         $testimonials = Testimonial::find($id);
        return view('testimonial.edittestimonial', compact('testimonials'));
 }
  
//function create
      public function create(){
         
       return view('testimonial.addtestimonial');
}
      public function update($id){
        $testimonial =Testimonial::find($id);
        //On ecrase la donnee que lon a recuperer
        //cibler les colonnes en question
       
        $testimonial->desc=request('desc');
        $testimonial->name=request('name');
        $testimonial->img_path=request('img_path');

        $testimonial->save();
        return redirect()->route('testimonials');
  


}


    public function store(){
      $testimonial = new Testimonial();
      $testimonial->name=request('name');
      $testimonial->desc=request('desc');
      $testimonial->img_path=request('img_path');
   
       
      
      $testimonial-> save();
   //il renvoie vers une redirection vers la route de portfolio
   //portfolio cest une route 
    return redirect()->route('testimonials');
 }
  

public function destroy($id) {
      $testimonial = Testimonial::find($id);
      $testimonial->delete();

      return redirect()->back();


}

  }

