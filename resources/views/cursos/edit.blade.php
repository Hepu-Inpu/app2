@extends('layouts.app')
@section('titulo','Editar')
@section('contenido')
<h3 class="text-center">editar curso</h3>
{{--se utiliza el atrubuuto encetype para subir cualquier archivo--}}
<form action="/curso/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="nombre">modifique el nombre</label>
        <input name="nombre" value="{{$cursito->nombre}}" type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="desc">modifique la descripcion</label>
        <input name="desc" value="{{$cursito->desc}}" type="text" class="form-control" id="desc">
    </div>
    <div class="form-group">
        <label for="ldcourse">ectualicé la imagen </label>
        <br>
        <input name="img"  value="{{$cursito->imagen}}" type="file" id="courseimg">
    </div>
    <button class="btn btn-outline-succeess" type="submit" style="background-color: rgb(166, 31, 255)">Update</button>
</form>
@endsection