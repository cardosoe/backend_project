@extends('base')
@section('title')  About Edit @endsection
@section('content')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">{{ "About Edit" }}</h1>
</div>

<form action="{{route("about.update", $about->id)}}" method="post">
  {{ csrf_field() }}

  {{ method_field("PATCH") }}  <div class="mb-3">
    <label for="name" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $about->name }}">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $about->email}}">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Teléfono</label>
    <input type="phone" class="form-control" id="phone" name="phone" value="{{ $about->phone}}">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Mensaje</label>
    <textarea name="message" id="message" class="form-control"rows="10" cols="30"> {{ $about->message}}"</textarea> 
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>


@endsection
