@extends('site.master.layout')

@section('content')

<h1>Serviço</h1>
<h3>{{$servico->servico}}</h3>
<h3>{{$servico->descricao}}</h3>
<h3>{{$servico->preco}}</h3>

@endsection