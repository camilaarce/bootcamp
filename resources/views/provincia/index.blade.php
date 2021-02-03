@extends('layouts.plantillabase');

@section('contenido')
    <title>Provincias</title>
    <h2>Lista de provincias</h2>
    </br>
    <a class="btn_agregar" href="/paises">Ir a pais</a>
    <a class="btn_agregar" href="/localidades">Ir a localidad</a>
    <a class="btn_agregar" href="/eventos">Ir a evento</a>
    <a class="btn_agregar" href="/provincias/create">Agregar provincia</a>
    </br>
    </br>
    <table id="provincias" class="table table-striped table-dark mt-4">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">País</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($provincias as $provincia)
            <tr>
                <td>{{ $provincia->Codigo }}</td>
                <td>{{ $provincia->Descripcion }}</td>
                <td>{{ $provincia->pais->Descripcion }}</td>
                <td>
                    <form method="POST" action="{{ route ('provincias.destroy',$provincia->id) }}">
                    <a class="btn btn-info" href="/provincias/{{ $provincia->id }}/edit">Editar</a>
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