@extends('layouts.plantillabase')

@section('contenido')
    <title>Paises</title>
    </br>
    <h2>Nuevo pais</h2>

    <x-jet-validation-errors class="mb-4 text-white" />

    <form method="POST" action="/paises" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="mb-1">
            <label for="" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" required tabindex="1" value="{{ old('codigo') }}">
        </div>
        
        <div class="mb-1">
            <label for="" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" required tabindex="2" value="{{ old('descripcion') }}">
        </div>

        </br>

        <button type="submit" class="btn btn-success">Agregar</button>
        <a href="/paises" class="btn btn-secondary">Cancelar</a>

    </form>

@endsection