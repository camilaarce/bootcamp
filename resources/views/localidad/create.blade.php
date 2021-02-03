@extends('layouts.plantillabase')

@section('contenido')
    <title>Localidades</title>
    </br>
    <h2>Nueva localidad</h2>

    <x-jet-validation-errors class="mb-4 text-white" />

    <form method="POST" action="/localidades" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="mb-1">
            <label for="" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" required tabindex="1" value="{{ old('codigo') }}">
        </div>
        
        <div class="mb-1">
            <label for="" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required tabindex="2" value="{{ old('descripcion') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Código postal</label>
            <input type="text" class="form-control" id="codigopostal" name="codigopostal" required tabindex="3" value="{{ old('codigopostal') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Código de área</label>
            <input type="text" class="form-control" id="codigoarea" name="codigoarea" required tabindex="4" value="{{ old('codigoarea') }}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">Provincia</label>
            <select id="provinciaid" name="provinciaid" required tabindex="5" value="{{ old('provinciaid') }}">
            @foreach ($provincias as $provincia)
                <option>{{ $provincia->id }}</option>
            @endforeach
            </select>
        </div>

        </br>

        <button type="submit" class="btn btn-success">Agregar</button>
        <a href="/localidades" class="btn btn-secondary">Cancelar</a>

    </form>

@endsection