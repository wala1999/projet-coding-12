@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp m">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3  ">Portfolio </h1>
 
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
                @foreach ($portfolios as $portfolio)
                    <tr class="row">
                        <td class="text-center col">{{$portfolio->id}}</td>
                        <td class="text-center col">{{$portfolio->img_name}}</td>
                        <td class="text-center col">{{$portfolio->img_desc}}</td>
                        <td class="text-center col"><img src="{{$portfolio->img_path}}" alt=""></td>
                        <td class="text-center col d-flex justify-content-center align-items-center">
                            <a href="{{route('portfolio.edit',$portfolio)}}" class="btn btn-outline-warning mx-2">editer</a>
                            <form action="{{route('portfolio.destroy',$portfolio)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-outline-danger mx-2">Supprimer</button>
                            </form>
                        </td>

                        <td>


                            <!-- Button trigger modal -->
                            <form action="{{route('portfolio.destroy',$portfolio)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type='submit' class="btn btn-outline-danger mx-2">Supprimer</button>
                        
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
            <form action="{{route('portfolio.destroy',$portfolio)}}" method="post">
                @csrf
                @method('DELETE')
                <button type='submit' class="btn btn-outline-danger mx-2">Supprimer</button>
            </form>
        
        </div>
      </div>
    </div>
  </div>
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