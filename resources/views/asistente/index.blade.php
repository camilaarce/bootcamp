@extends('layouts.plantillabase')

@section('css')
    <link rel="stylesheet" href="{{ asset('jquery-ui/jquery.ui.min.css') }}">
@endsection

@section('contenido')
    <title>Asistentes</title>
    </br>
    <h2>Eventos <a class="btn btn-info" href="/asistentes/create">Asistir</a></h2>
    </br>
    
    <form action="">
        <div class="input-group">
            <input type="text" class="form-control" id="search" placeholder="Buscar..." name="search">
            <div class="input-group-append">
                <button class="btn btn-info" type="submit">Buscar</button>
            </div>
        </div>
    </form>

    @foreach ($eventos as $evento)
        <div class="text-white">
                <h4>{{ $evento->Nombre }}</h4>
                <img src="{{ asset('storage').'/'.$evento->Foto }}" alt="" width="300">
                <p>{{ $evento->Descripcion }}</p>
                <p>Del {{ $evento->FechaInicio }} al {{ $evento->FechaFinalizacion }} </p>
                <p>Lugar: {{ $evento->Lugar }}</p>
                <p>{{ $evento->localidad->Descripcion }} - {{ $evento->localidad->provincia->Descripcion }} - {{ $evento->localidad->provincia->pais->Descripcion }}</p>
         </div>        
    @endforeach
   
    </br>
@endsection

@section('js')
    <script src="{{ asset('jQuery.js')}}"></script>
    <script src="{{ asset('jquery-ui/jquery.ui.min.js') }}"></script>

    <script>

        $('#search').autocomplete({
            source: function (request, response){
                $.ajax({
                    url: '{{route('search.eventos')}}',
                    dataType: 'json',
                    data: {
                        term: request.term
                    },
                    success: function (data){
                        response()
                    }
                });
            }
        })
    </script>
@endsection