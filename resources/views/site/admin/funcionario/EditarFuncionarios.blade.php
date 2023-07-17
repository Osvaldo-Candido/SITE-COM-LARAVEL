@extends('site.master.layout')

@section('content')
    <form action="{{route('site.actualizarusuario',['usuario'=>$usuario->id])}}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome</label><br><br>
        <input type="text" name="nome" value="{{ isset($usuario->nome) ? $usuario->nome : '' }}"><br>
        <label for="">Nascimento</label><br>
        <input type="date" name="nascimento" value="{{ isset($usuario->nascimento) ? $usuario->nascimento : '' }}"><br>
        <label for="">Escolaridade</label><br>
        <select name="escolaridade" id=""><br>
            <option value="Ens. Primário">Ens. Primário</option>
            <option value="Iº Ciclo">Iº Ciclo</option>
            <option value="IIº Ciclo">IIº Ciclo</option>
            <option value="Universitário">Universitário</option>
            <option value="Bacharel">Bacharel</option>
            <option value="Licenciado">Licenciado</option>
        </select>
        <label for="">Função</label><br>
        <input type="text" name="funcao"  value="{{ isset($usuario->funcao) ? $usuario->funcao : '' }}"><br>
        <label for="">Salário</label><br>
        <input type="text" name="salario" value="{{ isset($usuario->salario) ? $usuario->salario : '' }}"><br>
        <select name="nivel" id="" value="{{ isset($usuario->nivel) ? $usuario->nivel : '' }}"><br>
            <option value="Administrador">Administrador</option>
            <option value="Funcionário">Funcionário</option>
        </select><br>
        <label for="">Email</label><br>
        <input type="email" name="email" value="{{ isset($usuario->email) ? $usuario->email : '' }}"><br> 
        <label for="">Password</label><br>
        <input type="password" name="password" value="{{ isset($usuario->password) ? $usuario->password : '' }}"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
@endsection