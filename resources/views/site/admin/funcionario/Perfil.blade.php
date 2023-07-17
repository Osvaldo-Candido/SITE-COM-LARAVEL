@extends('site.master.layout')


@section('content')
<h2>Perfil</h2>
    <ul>
        <li>{{$usuario->nome}}</li>
        <li>{{$usuario->nascimento}}</li>
        <li>{{$usuario->escolaridade}}</li>
        <li>{{$usuario->funcao}}</li>
        <li>{{$usuario->salario}}</li>
    </ul>
@endsection