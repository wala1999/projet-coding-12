@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container ">
    <div class="text-center ">

        <h1 class="text-dark">Add service </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="container mb-5">
    
    <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        
  
        <div class="form-group">
            <label class="control-label" for="inputSuccess" for="titre" class="mt-5">Titre</label>
            <input type="text" name="titre" id="inputSuccess" class="form-control" value="">
        </div>
        <div class="form-group">
            <label class="control-label" for="inputSuccess" class="mt-5">Description</label>
            <input type="text" name="description" id="inputSuccess" class="form-control" value="">
        </div>
        <div class="form-group">
            <label class="control-label" for="inputSuccess" class="mt-5">Logo</label>
            <input type="text" name="logo" id="inputSuccess" class="form-control" value="">
        </div>
      
                     
        <div class="text-center">

            <button type="submit" class="btn btn-outline-dark">Submit</button>
        </div>

    </form>
</div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/users.css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">

@stop

@section('js')
   
@stop