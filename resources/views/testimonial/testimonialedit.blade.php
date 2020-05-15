@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Testimonial </h1>
        <a href="/testimonialedit/create" class="btn btn-success">Create</a>
        <hr class="bg-dark">
    </div>
</div>
@stop
@section('content')
    <div class="container">
        
        <table class="table table-striped">
            <thead>
              <tr  class="row bg-dark text-white">
                <th class="text-center col">Id</th>
                <th class="text-center col">Description</th>
                <th class="text-center col">image</th>
          

                <th class="text-center col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($testimonials as $testimonial)
                    <tr class="row">
                        <td class="text-center col">{{$testimonial->id}}</td>
                      
                        <td class="text-center col">{{$testimonial->desc}}</td>
                        <td class="text-center col">{{$testimonial->name}}</td>
                        <td class="text-center col"><img src="{{$testimonial->img_path}}" alt=""></td>
                        <td class="text-center col d-flex justify-content-center align-items-center">
                            <a href="{{route('testimonial.edit',$testimonial)}}" class="btn btn-outline-warning mx-2">editer</a>
                            <form action="{{route('testimonial.destroy',$testimonial)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-outline-danger mx-2">Supprimer</button>
                            </form>
                        </td>
                    </tr> 
                @endforeach
            </tbody>
          </table>  
@stop
@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection