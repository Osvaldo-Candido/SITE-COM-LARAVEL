@extends('site.master.layout')


@section('content')
<a href="{{route('site.cadastrarcliente')}}">Listar Clientes</a>
 <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Morada</th>
            <th>Contacto</th>
            <th>Email</th>
            <th>Ver</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($clientes as $cliente)
    <tr>
        <td>{{$cliente->id}}</td>
        <td>{{$cliente->nome}}</td>
        <td>{{$cliente->morada}}</td>
        <td>{{$cliente->contacto}}</td>
        <td>{{$cliente->email}}</td>
        <td><a href="{{route('site.vercliente',['cliente'=>$cliente->id])}}">Ver</a></td>
        <td><form action="{{route('site.editarcliente',['cliente'=>$cliente->id])}}" method="post">
            @csrf
            <input type="submit" value="Editar">    
        </form></td>
    </tr>
    @endforeach       
    </tbody>
</table>   
<script>
    $(document).ready(function() {
        $('.linha-clicavel').click(function() {
            var id = $(this).data('id');
            localStorage.setItem('idSelecionado', id);
            window.location.href = 'outra_pagina.html'; // Redirecionar para a outra página
        });
    });
</script>
@endsection