@extends('layouts.plantillabase')

@section('contenido')
    <title>Eventos</title>
    </br>
    <h2>Nuevo evento</h2>

    <x-jet-validation-errors class="mb-4 text-white" />

    <form method="POST" action="/eventos" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="mb-1">
            <label for="" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" required tabindex="1" value="{{ old('codigo') }}">
        </div>
        
        <div class="mb-1">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required tabindex="2" value="{{ old('nombre') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Foto</label>
            <input type="file" class="form-control" id="foto" name="foto" required tabindex="3" value="{{ old('foto') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required tabindex="4" value="{{ old('descripcion') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Fecha de inicio</label>
            <input type="date" class="form-control" id="fechainicio" name="fechainicio" required tabindex="5" value="{{ old('fechainicio') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Fecha de finalización</label>
            <input type="date" class="form-control" id="fechafinalizacion" name="fechafinalizacion" required tabindex="6" value="{{ old('fechafinalizacion') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Lugar</label>
            <input type="text" class="form-control" id="lugar" name="lugar" required tabindex="7" value="{{ old('lugar') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Geolocalización</label>
            <input type="text" class="form-control" id="geolocalizacion" name="geolocalizacion" required tabindex="4" value="{{ old('geolocalizacion') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Localidad</label>
            <select id="localidadid" name="localidadid" required tabindex="8" value="{{ old('localidadid') }}">
            @foreach ($localidades as $localidad)
                <option>{{ $localidad->id }}</option>
            @endforeach
            </select>
        </div>

        </br>

        <button type="submit" class="btn btn-success">Agregar</button>
        <a href="/eventos" class="btn btn-secondary">Cancelar</a>

    </form>

@endsection