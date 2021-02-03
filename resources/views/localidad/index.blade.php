@extends('layouts.plantillabase');

@section('contenido')
    <title>Localidades</title>
    <h2>Lista de localidades</h2>
    </br>
    <a class="btn_agregar" href="/paises">Ir a paises</a>
    <a class="btn_agregar" href="/provincias">Ir a provincia</a>
    <a class="btn_agregar" href="/eventos">Ir a eventos</a>
    <a class="btn_agregar" href="/localidades/create">Agregar localidad</a>
    </br>
    </br>
    <table id="localidades" class="table table-striped table-dark mt-4">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Codigo postal</th>
                <th scope="col">Codigo de área</th>
                <th scope="col">Provincia</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($localidades as $localidad)
            <tr>
                <td>{{ $localidad->Codigo }}</td>
                <td>{{ $localidad->Descripcion }}</td>
                <td>{{ $localidad->CodigoPostal }}</td>
                <td>{{ $localidad->CodigoArea }}</td>
                <td>{{ $localidad->provincia->Descripcion }}</td>
                <td>
                    <form method="POST" action="{{ route ('localidades.destroy',$localidad->id) }}">
                    <a class="btn btn-info" href="/localidades/{{ $localidad->id }}/edit">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Borrar?');">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection