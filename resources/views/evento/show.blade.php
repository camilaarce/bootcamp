@extends('layouts.plantillabase')

@section('contenido')
    <title>Eventos</title>
    </br>
    <h2>Nuevo evento</h2>
    {{ csrf_field() }}
    <h2>{{ $evento->Nombre }}</h2>
@endsection