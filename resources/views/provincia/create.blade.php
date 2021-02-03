@extends('layouts.plantillabase')

@section('contenido')
    <title>Provincias</title>
    </br>
    <h2>Nueva provincia</h2>

    <x-jet-validation-errors class="mb-4 text-white" />

    <form method="POST" action="/provincias" enctype="multipart/form-data">
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
            <label for="" class="form-label">País</label>
            <select id="paisid" name="paisid" required tabindex="3" value="{{ old('paisid') }}">
            @foreach ($paises as $pais)
                <option>{{ $pais->id }}</option>
            @endforeach
            </select>
        </div>

        </br>

        <button type="submit" class="btn btn-success">Agregar</button>
        <a href="/provincias" class="btn btn-secondary">Cancelar</a>

    </form>

@endsection