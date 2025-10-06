@extends('layout')
@section('title','Editar Estudiante')
@section('content')
  <h2>Editar Estudiante #{{ $estudiante->id }}</h2>
  <form method="POST" action="{{ route('estudiantes.update',$estudiante) }}">
    @method('PUT')
    @include('estudiantes._form', ['estudiante'=>$estudiante])
    <button>Actualizar</button>
    <a href="{{ route('estudiantes.index') }}">Volver</a>
  </form>
@endsection