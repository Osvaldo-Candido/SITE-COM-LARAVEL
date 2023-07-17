@extends('site.master.layout')

@section('content')
<a href="{{route('site.cadastrarfuncionario')}}">Novo Funcionário</a>
<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Escolaridade</th>
                <th>Salário</th>
                <th>Nível</th>
                <th>Criado</th>
                <th>Editado</th>
                <th>Perfil</th>
                <th>Editar</th>
            </tr>
        </thead>  
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <th>{{$usuario->id}}</th>
                <th>Foto</th>
                <th>{{$usuario->nome}}</th>
                <th>{{$usuario->nascimento}}</th>
                <th>{{$usuario->escolaridade}}</th>
                <th>{{$usuario->salario}}</th>
                <th>{{$usuario->nivel}}</th>
                <th>{{date('d/m/y H:i',strtotime($usuario->created_at))}}</th>
                <th>{{date('d/m/y H:i',strtotime($usuario->updated_at))}}</th>
                <th><a href="{{route('site.perfilusuario',['usuario'=>$usuario->id])}}">Perfil</a></th>
                <th>
                    <form action="{{route('site.editarusuario',['id'=>$usuario->id])}}" method="post">
                        @csrf
                        <input type="hidden" name="id">
                        <input type="submit" value="Editar">
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>      
    </table>
@endsection