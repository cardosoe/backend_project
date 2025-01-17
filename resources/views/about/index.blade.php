@extends('base')
@section('title')  about@endsection
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ "About" }}</h1>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-primary" aria-current="page" href="{{route("about.create")}}">+ Nuevo </a>
        </li>
     </ul>
     <form action="{{ route("about.search") }}" method="POST" class="d-flex">
      {{ csrf_field() }}
      <input class="form-control me-2" type="search" placeholder="Search" name="search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
    </div>
  </div>
</nav>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Mensaje</th>
    </tr>
  </thead>
  <tbody>
    @foreach($coleccion as $registro)
    <tr>
      <th scope="row">{{$registro->id}}</th>
      <td>{{$registro->name}}</td>
      <td>{{$registro->email}}</td>
      <td>{{$registro->phone}}</td>
      <td>{{$registro->message}}</td>
      <td>
        <a href="{{ route("about.edit",$registro->id) }}" class="btn btn-sm btn-primary d-grid col-6 mx-auto">Edit </a >
        <form action="{{ route("about.destroy",$registro->id) }}" method="post">
         {{ csrf_field() }}
         {{ method_field("DELETE") }} 
        <button type="submit" class="btn btn-sm btn-danger d-grid col-6 mx-auto" onclick="return confirm('¿Desea eliminar este registro?.')">Delete</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
