@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Modifier Contact </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')

     
<div class="container d-flex justify-content-center">
    <div class="col-5">
        <div class="container">

            <form action="/mapedit/{{$map->id}}/update" method="post">
            @csrf

            <div class="form-group">
                <label for="" class="mt-5">Adresse:</label>
            <input type="text" name="address" id="" class="form-control" value="{{$maps->address}}">
            </div>
            <div class="form-group">
                <label for="ExampleInputEmail" class="mt-5">Telephone:</label>
            <input type="text" name="phone" id="" class="form-control" value="{{$maps->phone}}">
            </div>
        
            <div class="form-group">
                <label for="" class="mt-5">Lien Google Map:</label>
            <input type="text" name="map_link" id="" class="form-control" value="{{$maps->map_link}}">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
            </form>
        </div>

    </div>

</div>
        <!-- /. ROW  -->
    
        <!-- /. ROW  -->
    </div>

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/users.css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">

@stop

@section('js')
   
@stop