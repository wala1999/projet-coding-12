@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Modifier Testimonial </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')
    

<div class="container mb-5">
    
    <form action="{{route('testimonial.update',$testimonials)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      
        <div class="form-group">
            <label for="" class="mt-5">Titre</label>
        <input type="text" name="name" id="" class="form-control" value="{{$testimonials->name}}">
        </div>
      
        <div class="form-group">
            <label for="" class="mt-5">Description</label>
        <input type="text" name="desc" id="" class="form-control" value="{{$testimonials->desc}}">
        </div>
      
        <div class="form-group">
            <label for="" class="mt-5">Image de la gallerie</label>
        <input type="text" name="img_path" id="" class="form-control" value="{{$testimonials->img_path}}">
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