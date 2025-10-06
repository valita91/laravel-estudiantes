@extends('layout')
@section('title','Nuevo Estudiante')
@section('content')
  <h2>Nuevo Estudiante</h2>
  <form method="POST" action="{{ route('estudiantes.store') }}">
    @include('estudiantes._form')
    <button>Guardar</button>
    <a href="{{ route('estudiantes.index') }}">Cancelar</a>
  </form>
@endsection