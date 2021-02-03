@extends('layouts.plantillabase');

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@endsection

@section('contenido')
    <title>Eventos</title>
    <h2>Lista de eventos</h2>
    </br>
    <a class="btn_agregar" href="/paises">Ir a paises</a>
    <a class="btn_agregar" href="/provincias">Ir a provincia</a>
    <a class="btn_agregar" href="/localidades">Ir a localidad</a>
    <a class="btn_agregar" href="/eventos/create">Agregar evento</a>
    </br>
    </br>
    <table id="eventos" class="table table-striped table-dark mt-4">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Foto</th>
                <th scope="col">Descripción</th>
                <th scope="col">Fecha de inicio</th>
                <th scope="col">Fecha de finalización</th>
                <th scope="col">Lugar</th>
                <th scope="col">Geolocalización</th>
                <th scope="col">Localidad</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eventos as $evento)
            <tr>
                <td>{{ $evento->Codigo }}</td>
                <td>{{ $evento->Nombre }}</td>
                <td>
                    <img src="{{ asset('storage').'/'.$evento->Foto }}" alt="" width="100">
                </td>
                <td>{{ $evento->Descripcion }}</td>
                <td>{{ $evento->FechaInicio }}</td>
                <td>{{ $evento->FechaFinalizacion }}</td>
                <td>{{ $evento->Lugar }}</td>
                <td>
                    <a class="btn btn-info" href="/eventos/{{ $evento->id }}/show">Ver</a>
                </td>
                <td>{{ $evento->localidad->Descripcion }}</td>
                <td>
                    <form method="POST" action="{{ route ('eventos.destroy',$evento->id) }}">
                    <a class="btn btn-info" href="/eventos/{{ $evento->id }}/edit">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Borrar?');">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#eventos').DataTable({
                "lengthMenu": [[2, 5, 10, 50, -1], [2, 5, 10, 50, "All"]],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json"
                }
            });
        } );
    </script>

    

    @endsection

@endsection