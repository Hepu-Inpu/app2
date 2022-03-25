@extends('layouts.app')

@section('titulo', 'Detalles')
@section('contenido')


        <img style="height: 400px;  width:500px; margin:20px;" src="{{ Storage::url($cursito->imagen) }}"
            class="card-img-top mx-auto d-block" alt="...">
        <div class="card-body text-center">
            {{----}}<h5 class="card-title">{{ $cursito->nombre }} </h5>
            <p class="card-text">{{ $cursito->desc }} </p>
            <a href="/curso/{{$cursito->id}}/edit" class="btn btn-primary">editar</a>
        </div>

@endsection
