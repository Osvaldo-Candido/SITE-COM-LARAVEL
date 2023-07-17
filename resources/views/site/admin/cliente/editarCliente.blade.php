@extends('site.master.layout')


@section('content')
 <form action="{{route('site.actualizarcliente',['cliente'=>$cliente->id])}}" method="post">
    @csrf
    @method('PUT')
    <label for="">Nome</label>
    <input type="text" name="nome"  value="{{ isset($cliente->nome) ? $cliente->nome : '' }}">
    <label for="">Morada</label>
    <input type="text" name="morada"  value="{{ isset($cliente->morada) ? $cliente->morada : '' }}">
    <label for="">Contacto</label>
    <input type="tel" name="contacto"  value="{{ isset($cliente->contacto) ? $cliente->contacto : '' }}">
    <label for="">Email</label>
    <input type="email" name="email"  value="{{ isset($cliente->email) ? $cliente->email : '' }}">
    <input type="submit" value="Cadastrar">
 </form>   
@endsection