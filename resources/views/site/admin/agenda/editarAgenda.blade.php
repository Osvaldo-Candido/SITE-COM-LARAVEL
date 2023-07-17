@extends('site.master.layout')


@section('content')

<form action="{{route('site.actualizaragenda',['agenda'=>$agenda->id])}}" method="post">
@csrf
@method('PUT')
<label for="">Cliente</label><br>
<select name="idCliente" id=""><br>
    @foreach ($clientes as $cliente)
        <option value="{{ isset($cliente->id) ? $cliente->id : $cliente->id }}">{{ isset($cliente->nome) ? $cliente->nome :$cliente->nome}}</option>
    @endforeach
</select><br>
<label for="">Serviço</label><br>
<select name="idServico" id=""><br>
    @foreach ($servicos as $servico)
        <option value="{{ isset($servico->id) ? $servico->id : $servico->id }}">{{ isset($servico->servico) ? $servico->servico : $servico->servico }}</option>
    @endforeach
</select><br>
<label for="">Dia</label><br>
<input type="date" name="data" id="" value="{{ isset($agenda->data) ? $agenda->data : '' }}"><br>
<label for="">Hora</label><br>
<input type="time" name="hora" id="" value="{{ isset($agenda->hora) ? $agenda->hora : '' }}"><br>
<label for="">Local</label><br>
<input type="text" name="local" id="" value="{{ isset($agenda->local) ? $agenda->local : '' }}"><br>
<label for="">Descrição</label><br>
<textarea name="descricao" id="" cols="30" rows="10">{{ isset($agenda->descricao) ? $agenda->descricao : '' }}"</textarea><br>
<input type="submit" value="Agendar">
</form>

@endsection