@extends('site.master.layout')


@section('content')


<h3>Funcionários {{$funcionarios}}</h3>
<h3>Clientes {{$clientes}}</h3>
<h3>Serviços {{$servicos}}</h3>
<h3>Total arrecadado {{$total_servicos_valores}}</h3>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Contacto</th>
            <th>Email</th>
            <th>Serviços solicitados</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dadosClientes as $cliente)
        <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->contacto}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->total_compras}}</td>
            <td>{{$cliente->total_gasto}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{route('site.loginterminar')}}">Sair</a>
@endsection