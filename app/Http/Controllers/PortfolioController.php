<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class PortfolioController extends Controller

  {
    
        public function show(){
          $portfolios = Portfolio::all();
           return view('portfolio.portfolioedit', compact('portfolios'));
        }
     
  //function edit
        public function edit($id){
           $portfolios = Portfolio::find($id);
          return view('portfolio.editportfolio', compact('portfolios'));
   }
    
  //function create
        public function create(){
           
         return view('portfolio.addportfolio');
 }
        public function update($id){
          $portfolio =Portfolio::find($id);
          //On ecrase la donnee que lon a recuperer
          //cibler les colonnes en question
          $portfolio->img_name=request('img_name');
          $portfolio->img_desc=request('img_desc');
          $portfolio->img_path=request('img_path');

          $portfolio->save();
          return redirect()->route('portfolios');
    


 }

 
      public function store(){
        $portfolio = new Portfolio();
        $portfolio->img_name=request('img_name');
        $portfolio->img_desc=request('img_desc');
        $portfolio ->img_path=request('img_path');
         
        
        $portfolio-> save();
     //il renvoie vers une redirection vers la route de portfolio
     //portfolio cest une route 
      return redirect()->route('portfolios');
   }
    
 
 public function destroy($id) {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();

        return redirect()->back();

  
}

    }
