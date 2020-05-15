@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Edit Portfolio </h1>
        <hr class="bg-dark">
    </div>
</div>
@stop

@section('content')

     
<div class="container d-flex justify-content-center">
    <div class="col-5">
        <div class="container">
            <h1 class="text-center pt-5">Portfolio update</h1>
            <form action="/portfolioedit/{{$portfolios->id}}/update" method="post">
            @csrf

            <div class="form-group">
                <label for="" class="mt-5">Titre Secondaire</label>
            <input type="text" name="img_name" id="" class="form-control" value="{{$portfolios->img_name}}">
            </div>
            <div class="form-group">
                <label for="ExampleInputEmail" class="mt-5">Description Secondaire</label>
            <input type="text" name="img_desc" id="" class="form-control" value="{{$portfolios->img_desc}}">
            </div>
            <div class="form-group">
                <label for="" class="mt-5">Image URL</label>
            <input type="text" name="img_path" id="" class="form-control" value="{{$portfolios->img_path}}">
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