@extends('site.master.layout')

@section('content')
<a href="{{route('site.cadastrarservico')}}">Listar Serviço</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Serviço</th>
                <th>Descricao</th>
                <th>Preco</th>
                <th>Ver</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicos as $servico)
            <tr>
                <td>{{$servico->id}}</td>
                <td>{{$servico->servico}}</td>
                <td>{{$servico->descricao}}</td>
                <td>{{$servico->preco}}</td>
                <td>
                    <a href="{{route('site.verservico',['servico'=>$servico->id])}}">Detalhes</a>
                    <form action="{{route('site.editarservico',['servico'=>$servico->id])}}" method="POST">
                        @csrf
                        <input type="submit" value="Editar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection