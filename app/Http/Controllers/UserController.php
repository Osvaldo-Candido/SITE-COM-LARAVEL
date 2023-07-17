<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $usuarios = User::all();
        return view('site.admin.funcionario.listarFuncionarios',[
            'usuarios' => $usuarios
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('site.admin.funcionario.CadastrarFuncionarios');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $usuario = new User();
        $usuario->nome = $request->nome;
        $usuario->nascimento = $request->nascimento;
        $usuario->escolaridade = $request->escolaridade;
        $usuario->funcao = $request->funcao;
        $usuario->salario = $request->salario;
        $usuario->nascimento = $request->nascimento;
        $usuario->nivel = $request->nivel;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();
    
        return redirect()->route('site.listarUsuarios');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        //
        return view('site.admin.funcionario.perfil',['usuario' => $usuario]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = User::where('id',$id)->first();

        return view('site.admin.funcionario.
        
        EditarFuncionarios',[
            'usuario' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $usuario, Request $request)
    {
        //
        $usuario->nome = $request->nome;
        $usuario->nascimento = $request->nascimento;
        $usuario->escolaridade = $request->escolaridade;
        $usuario->funcao = $request->funcao;
        $usuario->salario = $request->salario;
        $usuario->nascimento = $request->nascimento;
        $usuario->nivel = $request->nivel;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();

        return redirect()->route('site.listarUsuarios');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
