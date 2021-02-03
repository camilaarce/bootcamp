@extends('layouts.plantillabase')

@section('contenido')
    <title>Eventos</title>
    </br>
    <h2>Asistencia</h2>

    <x-jet-validation-errors class="mb-4 text-white" />

    <form method="POST" action="/asistentes" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="mb-1">
            <label for="" class="form-label">Documento</label>
            <input type="text" class="form-control" id="documento" name="documento" required tabindex="1" value="{{ old('documento') }}">
        </div>
        
        <div class="mb-1">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required tabindex="2" value="{{ old('nombre') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fechanacimiento" name="fechanacimiento" required tabindex="3" value="{{ old('fechanacimiento') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Email</label>
            <input type="mail" class="form-control" id="email" name="email" required tabindex="4" value="{{ old('email') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Número de teléfono</label>
            <input type="text" class="form-control" id="numerotelefono" name="numerotelefono" required tabindex="5" value="{{ old('numerotelefono') }}">
        </div>

        <label for="" class="form-label">Evento </label>
            <select id="evento" name="evento" required tabindex="8" value="{{ old('evento') }}">
            @foreach ($eventos as $evento)
                <option> {{ $evento->id }} </option>
            @endforeach
            </select>
        </br>

        <button type="submit" class="btn btn-success" onclick="return confirm('Se le notificará por alguno de los medios provistos sobre su asistencia al evento');">Enviar</button>
        <a href="/asistentes" class="btn btn-secondary">Volver</a>

    </form>

@endsection