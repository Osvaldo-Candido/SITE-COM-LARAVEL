@extends('site.master.layouthome')


@section('content')

    <form action="" method="post">
        <label for="">Email</label><br>
        <input type="email" name="email" id=""><br>
        <label for="">Senha</label><br>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="Entrar">
    </form>

@endsection