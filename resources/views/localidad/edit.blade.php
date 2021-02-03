@extends('layouts.plantillabase')

@section('contenido')
    <title>Localidades</title>
    </br>
    <h2>Editar localidad</h2>

    <form method="POST" action="/localidades/{{$localidad->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
        <div class="mb-1">
            <label for="" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" tabindex="1" value="{{$localidad->Codigo}}">
        </div>
        
        <div class="mb-1">
            <label for="" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" tabindex="2" value="{{$localidad->Descripcion}}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Código Postal</label>
            <input type="text" class="form-control" id="codigopostal" name="codigopostal" tabindex="3" value="{{$localidad->CodigoPostal}}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Código de área</label>
            <input type="text" class="form-control" id="codigoarea" name="codigoarea" tabindex="4" value="{{$localidad->CodigoArea}}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Provincia</label>
            <select id="provinciaid" name="provinciaid" required tabindex="5" value="{{ $localidad->ProvinciaID }}">
            @foreach ($provincias as $provincia)
                <option>{{ $provincia->id }}</option>
            @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Modificar</button>
        <a href="/localidades" class="btn btn-secondary">Cancelar</a>

    </form>

@endsection