@csrf
<label>Nombre
  <input name="nombre" value="{{ old('nombre', $estudiante->nombre ?? '') }}" required maxlength="100">
</label>
<label>Apellido
  <input name="apellido" value="{{ old('apellido', $estudiante->apellido ?? '') }}" required maxlength="100">
</label>
<label>Teléfono
  <input name="telefono" value="{{ old('telefono', $estudiante->telefono ?? '') }}" maxlength="30">
</label>
<label>Fecha de inscripción
  <input type="date" name="fecha_inscripcion" value="{{ old('fecha_inscripcion', isset($estudiante)?$estudiante->fecha_inscripcion:'' ) }}" required>
</label>

@if ($errors->any())
<article role="alert">
  <strong>Corrige los errores:</strong>
  <ul>
    @foreach ($errors->all() as $err) <li>{{ $err }}</li> @endforeach
  </ul>
</article>
@endif