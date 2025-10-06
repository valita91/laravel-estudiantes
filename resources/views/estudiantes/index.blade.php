@extends('layout')

@section('title','Listado de Estudiantes')

@section('content')
  <h2>Estudiantes</h2>
  <a href="{{ route('estudiantes.create') }}">➕ Nuevo</a>
  <table>
    <thead>
      <tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Teléfono</th><th>Fecha Inscripción</th><th></th></tr>
    </thead>
    <tbody>
      @forelse($estudiantes as $e)
        <tr>
          <td>{{ $e->id }}</td>
          <td>{{ $e->nombre }}</td>
          <td>{{ $e->apellido }}</td>
          <td>{{ $e->telefono }}</td>
          <td>{{ \Illuminate\Support\Carbon::parse($e->fecha_inscripcion)->format('d/m/Y') }}</td>
          <td style="white-space:nowrap">
            <a href="{{ route('estudiantes.show',$e) }}">Ver</a>
            <a href="{{ route('estudiantes.edit',$e) }}">Editar</a>
            <form action="{{ route('estudiantes.destroy',$e) }}" method="POST" style="display:inline">
              @csrf @method('DELETE')
              <button onclick="return confirm('¿Eliminar?')">Eliminar</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="6">Sin registros</td></tr>
      @endforelse
    </tbody>
  </table>

  {{ $estudiantes->links() }}
@endsection