@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp m">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3  ">Google MAp</h1>
        <a href="/mapedit/create" class="btn btn-warning ">Create</a>
        <hr class="bg-dark">
    </div>
</div>
@stop
@section('content')
    <div class="container">
        
        <table class="table table-striped">
            <thead>
              <tr  class="row bg-dark text-white">
                <th class="text-center col">Adresse</th>

                <th class="text-center col">Phone</th>
            
                <th class="text-center col">Map link:</th>
  

          

                <th class="text-center col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($maps as $map)
                    <tr class="row">
                

                        <td class="text-center col">{{$map->address}}</td>

                        <td class="text-center col">{{$map->phone}}</td>                        
                        <td class="text-center col">{{$map->map_link}}</td>


                        <td class="text-center col d-flex justify-content-center align-items-center">
                            <a href="{{route('map.edit',$map)}}" class="btn btn-outline-warning mx-2">editer</a>
                            <form action="{{route('map.destroy',$map)}}" method="post">
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