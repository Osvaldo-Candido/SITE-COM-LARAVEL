@extends('site.master.layout')

@section('content')
    <form action="{{route('site.persistirusuario')}}" method="post">
        @csrf
        <label for="">Nome</label><br>
        <input type="text" name="nome"><br>
        <label for="">Nascimento</label><br>
        <input type="date" name="nascimento"><br>
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
        <input type="text" name="funcao"><br>
        <label for="">Salário</label><br>
        <input type="text" name="salario"><br>
        <select name="nivel" id=""><br>
            <option value="Administrador">Administrador</option>
            <option value="Funcionário">Funcionário</option>
        </select>
        <label for="">Email</label><br>
        <input type="email" name="email"><br> 
        <label for="">Password</label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Cadastrar">
    </form>
@endsection