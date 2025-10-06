@extends('layout')
@section('title','Detalle Estudiante')
@section('content')
  <h2>Estudiante #{{ $estudiante->id }}</h2>
  <ul>
    <li><b>Nombre:</b> {{ $estudiante->nombre }}</li>
    <li><b>Apellido:</b> {{ $estudiante->apellido }}</li>
    <li><b>Teléfono:</b> {{ $estudiante->telefono }}</li>
    <li><b>Fecha inscripción:</b> {{ \Illuminate\Support\Carbon::parse($estudiante->fecha_inscripcion)->format('d/m/Y') }}</li>
  </ul>
  <a href="{{ route('estudiantes.edit',$estudiante) }}">Editar</a>
  <a href="{{ route('estudiantes.index') }}">Volver</a>
@endsection