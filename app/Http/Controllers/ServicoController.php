<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $servico = Servico::all();
        return view('site.admin.servicos.listarServicos',[
            'servicos' => $servico
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('site.admin.servicos.cadastrarServicos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $servico = new Servico();
        $servico->servico = $request->servico;
        $servico->descricao = $request->descricao;
        $servico->preco = $request->preco;
        $servico->save();

        return redirect()->route('site.listarServicos');

    }

    /**
     * Display the specified resource.
     */
    public function show(Servico $servico)
    {
        //
        return view('site.admin.servicos.verServico',[
            'servico' => $servico
        ]);
        
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servico $servico)
    {
        //
        return view('site.admin.servicos.editarServico',[
            'servico' => $servico
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Servico $servico, Request $request)
    {
        //
        $servico->servico = $request->servico;
        $servico->descricao = $request->descricao;
        $servico->preco = $request->preco;
        $servico->save();

        return redirect()->route('site.listarServicos');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
