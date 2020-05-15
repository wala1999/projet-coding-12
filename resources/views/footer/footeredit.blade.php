@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp mt-5">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3 mt-3 ">Footer</h1>
    
        <hr class="bg-dark">
    </div>
</div>
@stop
@section('content')

    <div class="mb-5 container"> 
         <table class="table table-striped">
            <thead>
              <tr  class="row bg-dark text-white">
                <th class="text-center col">Description</th>
                <th class="text-center col">Action</th>
     
              </tr>    
            </thead>
            <tbody>
                @foreach ($footers as $footer)
                    <tr class="row">
                 
                        <td class="text-center col">{{$footer->text}}</td>

                        <td class="text-center col d-flex justify-content-center align-items-center">
                            <a href="{{route('footer.edit',$footer)}}" class="btn btn-outline-warning mx-2">editer</a>
                            <form action="{{route('footer.destroy',$footer)}}" method="post">
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