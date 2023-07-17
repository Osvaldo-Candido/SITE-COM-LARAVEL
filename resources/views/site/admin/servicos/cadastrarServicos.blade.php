@extends('site.master.layout')

@section('content')

    <form action="{{route('site.persistirservico')}}" method="post">
        @csrf
        <label for="">Servico</label><br>
        <input type="text" name="servico" id=""><br>
        <label for="">Descricao</label><br>
        <textarea name="descricao" id="" cols="30" rows="10"></textarea><br>
        <label for="">Preco</label><br>
        <input type="text" name="preco"><br>
        <input type="submit" value="Cadastrar">
    </form>

@endsection

