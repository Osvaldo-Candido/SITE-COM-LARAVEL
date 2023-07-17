@extends('site.master.layout')


@section('content')
<!----TABELA DE AGENDAS---->
<a href="{{route('site.cadastraagenda')}}">Listar Clientes</a>
 <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Serviço</th>
            <th>Cliente</th>
            <th>Data</th>
            <th>Hora</th>
            <th>Local</th>
            <th>Descrição</th>
            <th>Editar</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($agendas as $agenda)
    <tr>
        <td>{{$agenda->id}}</td>
        <td>{{$agenda->servico}}</td>
        <td>{{$agenda->nome}}</td>
        <td>{{$agenda->data}}</td>
        <td>{{$agenda->hora}}</td>
        <td>{{$agenda->local}}</td>
        <td>{{$agenda->descricao}}</td>
        <td>{{$agenda->preco}}</td>
        <td><a href="{{route('site.editaragenda',['agenda'=>$agenda->id])}}">Ver</a></td>
        <td><form action="{{route('site.editaragenda',['agenda'=>$agenda->id])}}" method="post">
            @csrf
            <input type="submit" value="Editar">    
        </form></td>
    </tr>
    @endforeach       
    </tbody>
</table>   
@endsection