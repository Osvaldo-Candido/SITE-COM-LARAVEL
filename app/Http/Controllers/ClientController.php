<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cliente = Cliente::all();
        return view('site.admin.cliente.listarClientes',
        ['clientes' => $cliente]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('site.admin.cliente.cadastrarCliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cliente = new Cliente();
        $cliente->nome = $request->nome;
        $cliente->morada = $request->morada;
        $cliente->contacto = $request->contacto;
        $cliente->email = $request->email;
        $cliente->save();

        return redirect()->route('site.listarClientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
        return view('site.admin.cliente.verCliente',['cliente'=>$cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
        return view('site.admin.cliente.editarCliente',['cliente'=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Cliente $cliente, Request $request)
    {
        //
        $cliente->nome = $request->nome;
        $cliente->morada = $request->morada;
        $cliente->contacto = $request->contacto;
        $cliente->email = $request->email;
        $cliente->save();

        return redirect()->route('site.listarClientes');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
