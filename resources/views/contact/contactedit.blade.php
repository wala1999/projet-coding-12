@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')
<div class="container wow fadeInUp m">
    <div class="text-center mb-5 mx-5 px-5">

        <h1 class="text-dark  p-3  ">Section Contact :0 </h1>
        <a href="/contactedit/create" class="btn btn-warning ">Create</a>
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

                <th class="text-center col">Tel</th>
                <th class="text-center col">Email</th>
                <th class="text-center col">Description</th>
                <th class="text-center col">Actions</th>
  

          

                <th class="text-center col">Action</th>
              </tr>    
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr class="row">
                

                        <td class="text-center col">{{$contact->address}}</td>
                        <td class="text-center col">{{$contact->email}}</td>
                        <td class="text-center col">{{$contact->tel}}</td>


                        <td class="text-center col d-flex justify-content-center align-items-center">
                            <a href="{{route('portfolio.edit',$contact)}}" class="btn btn-outline-warning mx-2">editer</a>


<!-- Button trigger modal -->
<td>
    <form action="{{route('contact.destroy',$contact)}}" method="post">
        @csrf
        @method('DELETE')
<button type="submit" class="btn btn-outline-danger mx-2" data-toggle="modal" data-target="#exampleModal">Supprimer
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Do you really want to delete this ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
            <form action="{{route('contact.destroy',$contact)}}" method="post">
                @csrf
                @method('DELETE')
        <button type="submit" class="btn btn-outline-danger mx-2" data-toggle="modal" data-target="#exampleModal">Supprimer
          </button>
    
        </div>
      </div>
    </div>
  </div>

</td>


                        
                ]
                    </tr> 
                @endforeach
            </tbody>
          </table>  
@stop
@section('css')
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
@endsection