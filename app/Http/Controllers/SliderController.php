<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller

  {
    
        public function show(){
          $sliders = Slider::all();
           return view('slider.slideredit', compact('sliders'));
        }
     
  //function edit
        public function edit($id){
           $sliders = Slider::find($id);
          return view('slider.editslider', compact('sliders'));
   }
    
  //function create
        public function create(){
           
         return view('slider.addslider');
 }
        public function update($id){
          $slider =Slider::find($id);
          //On ecrase la donnee que lon a recuperer
          //cibler les colonnes en question
  
          $slider->img_desc=request('img_desc');
          $slider->img_path=request('img_path');

          $slider->save();
          return redirect()->route('sliders');
    


 }

 
      public function store(){
        $slider = new Slider();
      
        $slider->img_desc=request('img_desc');
        $slider ->img_path=request('img_path');
         
        
        $slider-> save();
     //il renvoie vers une redirection vers la route de portfolio
     //portfolio cest une route 
      return redirect()->route('sliders');
   }
    
 
 public function destroy($id) {
        $slider = Slider::find($id);
        $slider->delete();

        return redirect()->back();

  
}

    }
