@extends('layouts.plantillabase')

@section('contenido')
    <title>Paises</title>
    </br>
    <h2>Editar pais</h2>

    <form method="POST" action="/paises/{{$pais->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
        <div class="mb-1">
            <label for="" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" tabindex="1" value="{{$pais->Codigo}}">
        </div>
        
        <div class="mb-1">
            <label for="" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" tabindex="2" value="{{$pais->Descripcion}}">
        </div>

        <button type="submit" class="btn btn-success">Modificar</button>
        <a href="/peliculas" class="btn btn-secondary">Cancelar</a>

    </form>

@endsection