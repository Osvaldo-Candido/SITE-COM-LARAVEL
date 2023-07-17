@extends('site.master.layout')


@section('content')
 <form action="{{route('site.persistircliente')}}" method="POST">
    @csrf
    <label for="">Nome</label><br>
    <input type="text" name="nome"><br>
    <label for="">Morada</label><br>
    <input type="text" name="morada"><br>
    <label for="">Contacto</label><br>
    <input type="tel" name="contacto"><br>
    <label for="">Email</label><br>
    <input type="email" name="email"><br>
    <input type="submit" value="Cadastrar">
 </form>   
@endsection