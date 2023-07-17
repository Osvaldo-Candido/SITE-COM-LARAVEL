@extends('site.master.layout')


@section('content')

<form action="{{route('site.persistiragenda')}}" method="post">
@csrf
<label for="">Cliente</label><br>
<select name="idCliente" id=""><br>
    @foreach ($clientes as $cliente)
        <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
    @endforeach
</select><br>
<label for="">Serviço</label><br>
<select name="idServico" id=""><br>
    @foreach ($servicos as $servico)
        <option value="{{$servico->id}}">{{$servico->servico}}Preço {{$servico->preco}}Kz</option>
    @endforeach
</select><br>
<label for="">Dia</label><br>
<input type="date" name="data" id=""><br>
<label for="">Hora</label><br>
<input type="time" name="hora" id=""><br>
<label for="">Local</label><br>
<input type="text" name="local" id=""><br>
<label for="">Descrição</label><br>
<textarea name="descricao" id="" cols="30" rows="10"></textarea><br>
<input type="submit" value="Agendar">
</form>

@endsection