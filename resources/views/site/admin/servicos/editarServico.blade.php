@extends('site.master.layout')

@section('content')

    <form action="{{route('site.actualizarservico',['servico' => $servico->id])}}" method="post">
        @csrf
        @method('put')
        <label for="">Servico</label><br>
        <input type="text" name="servico" id="" value="{{ isset($servico->servico) ? $servico->servico : '' }}"><br>
        <label for="">Descricao</label>
        <textarea name="descricao" id="" cols="30" rows="10">{{ isset($servico->descricao) ? $servico->descricao : '' }}</textarea><br>
        <label for="">Preco</label><br>
        <input type="text" name="preco" value="{{ isset($servico->preco) ? $servico->preco : '' }}"><br>
        <input type="submit" value="Cadastrar">
    </form>

@endsection