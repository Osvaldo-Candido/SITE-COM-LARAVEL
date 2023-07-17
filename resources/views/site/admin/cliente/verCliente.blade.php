@extends('site.master.layout')


@section('content')
    <h1>Cliente</h1>
    <h4>{{$cliente->nome}}</h4>
    <h4>{{$cliente->contacto}}</h4>
    <h4>{{$cliente->morada}}</h4>
    <h4>{{$cliente->email}}</h4>
@endsection