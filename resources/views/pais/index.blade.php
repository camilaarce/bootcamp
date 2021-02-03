@extends('layouts.plantillabase');

@section('contenido')
    <title>Paises</title>
    <h2>Lista de paises</h2>
    </br>
    <a class="btn_agregar" href="/provincias">Ir a provincia</a>
    <a class="btn_agregar" href="/localidades">Ir a localidad</a>
    <a class="btn_agregar" href="/eventos">Ir a evento</a>
    <a class="btn_agregar" href="/paises/create">Agregar pais</a>
    </br>
    </br>
    <table id="paises" class="table table-striped table-dark mt-4">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paises as $pais)
            <tr>
                <td>{{ $pais->Codigo }}</td>
                <td>{{ $pais->Descripcion }}</td>
                <td>
                    <form method="POST" action="{{ route ('paises.destroy',$pais->id) }}">
                    <a class="btn btn-info" href="/paises/{{ $pais->id }}/edit">Editar</a>
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