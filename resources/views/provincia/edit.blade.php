@extends('layouts.plantillabase')

@section('contenido')
    <title>Provincias</title>
    </br>
    <h2>Editar provincia</h2>

    <form method="POST" action="/provincias/{{$provincia->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
        <div class="mb-1">
            <label for="" class="form-label">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" tabindex="1" value="{{$provincia->Codigo}}">
        </div>
        
        <div class="mb-1">
            <label for="" class="form-label">Descripción</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" tabindex="2" value="{{$provincia->Descripcion}}">
        </div>

        <div class="mb-1">
            <label for="" class="form-label">País</label>
            <select id="paisid" name="paisid" required tabindex="3" value="{{ $provincia->PaisID }}">
            @foreach ($paises as $pais)
                <option>{{ $pais->id }}</option>
            @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Modificar</button>
        <a href="/provincias" class="btn btn-secondary">Cancelar</a>

    </form>

@endsection