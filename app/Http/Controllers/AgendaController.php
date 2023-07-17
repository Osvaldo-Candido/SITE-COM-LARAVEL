<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Cliente;
use App\Models\Servico;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $agenda = Agenda::join('clientes','agendas.IdCliente','=','clientes.id')
                        ->join('servicos','agendas.IdServico','=','servicos.id')
                        ->select('agendas.id AS id','clientes.nome AS nome', 'servicos.servico AS servico',
                        'agendas.data AS data', 'agendas.hora AS hora', 'agendas.local AS local', 'servicos.preco AS preco')->get();

        return view('site.admin.agenda.listarAgenda',[
                'agendas' => $agenda
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cliente = Cliente::all();
        $servico = Servico::all();

        return view('site.admin.agenda.cadastrarAgenda',[
                'clientes' => $cliente,
                'servicos' => $servico
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Agenda $agenda, Request $request)
    {
        //
        $agenda->idServico = $request->idServico;
        $agenda->idCliente = $request->idCliente;
        $agenda->data = $request->data;
        $agenda->hora = $request->hora;
        $agenda->local = $request->local;
        $agenda->descricao = $request->descricao;
        $agenda->save();

        return redirect()->route('site.listaragenda');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agenda $agenda)
    {
        //
        $cliente = Cliente::all();
        $servico = Servico::all();

        return view('site.admin.agenda.editarAgenda',[
            'agenda' => $agenda,
            'clientes' => $cliente,
            'servicos' => $servico
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Agenda $agenda, Request $request)
    {
        //
        $agenda->idServico = $request->idServico;
        $agenda->idCliente = $request->idCliente;
        $agenda->data = $request->data;
        $agenda->hora = $request->hora;
        $agenda->local = $request->local;
        $agenda->descricao = $request->descricao;
        $agenda->save();

        return redirect()->route('site.listaragenda');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
