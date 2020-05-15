<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;



class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Service $service)
    {
        $services = Service::all();
        return view('service.serviceedit', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        $services = Service::all();
        return view('service.serviceedit', compact('services'));
    }
         


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $service = new Service();
        $service->titre =request('titre');
        $service->description=request('description');
        $service->logo=request('logo');
        $service->save();


        return redirect()->route('services');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Service::find($id);
     
        return view('service.editservice',compact('services'));
    }
  //function create
  public function create(){
           
    return view('service.addservice');
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $service =Service::find($id);
          //On ecrase la donnee que lon a recuperer
          //cibler les colonnes en question
        
        $service->titre =request('titre');
        $service->description =request('description');
        $service->logo =request('logo');
        $service->save();


        return redirect()->route('services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }
}