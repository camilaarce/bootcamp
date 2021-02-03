@extends('layouts.plantillabase')

@section('contenido')
    <title>Eventos</title>
    </br>
    <h2>Editar evento</h2>

    <form method="POST" action="/eventos/{{$evento->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
        <div class="mb-1">
            <label for="" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" tabindex="1" value="{{$evento->Codigo}}">
        </div>
        
        <div class="mb-1">
            <label for="" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" tabindex="2" value="{{$evento->Nombre}}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Foto</label>
            </br>
            <img src="{{ asset('storage').'/'.$evento->Foto }}" alt="" width="150">
            <input type="file" class="form-control" id="foto" name="foto" tabindex="5" value="{{'storage/'.$evento->Foto}}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" tabindex="2" value="{{$evento->Descripcion}}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Fecha de inicio</label>
            <input type="date" class="form-control" id="fechainicio" name="fechainicio" tabindex="3" value="{{$evento->FechaInicio}}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Fecha de finalización</label>
            <input type="date" class="form-control" id="fechafinalizacion" name="fechafinalizacion" tabindex="4" value="{{$evento->FechaFinalizacion}}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Lugar</label>
            <input type="text" class="form-control" id="lugar" name="lugar" tabindex="2" value="{{$evento->Lugar}}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Geolocalización</label>
            <input type="text" class="form-control" id="geolocalizacion" name="geolocalizacion" tabindex="2" value="{{$evento->Geolocalizacion}}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Localidad</label>
            <select id="localidadid" name="localidadid" required tabindex="5" value="{{ $evento->LocalidadID }}">
            @foreach ($localidades as $localidad)
                <option>{{ $localidad->id }}</option>
            @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Modificar</button>
        <a href="/eventos" class="btn btn-secondary">Cancelar</a>

    </form>

@endsection
