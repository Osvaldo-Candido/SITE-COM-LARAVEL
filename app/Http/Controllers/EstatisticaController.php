<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Servico;
use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Query\Expression;
class EstatisticaController extends Controller
{
    //
    public function dashboard()
    {
        $funcionarios = User::count();
        $clientes = Cliente::count();
        $servicos = Servico::count();
        $dadosClientes = Agenda::join('clientes', 'agendas.idCliente', '=', 'clientes.id')
        ->join('servicos', 'agendas.idServico', '=', 'servicos.id')
        ->select('clientes.nome AS nome', 'clientes.email AS email','clientes.contacto AS contacto',
                new Expression('COUNT(agendas.id) AS total_compras'),
                new Expression('SUM(servicos.preco) AS total_gasto'))
        ->groupBy('clientes.nome', 'clientes.email','clientes.contacto')
        ->get();

        $total_servicos_valores = Agenda::join('clientes', 'agendas.IdCliente', '=', 'clientes.id')
        ->join('servicos', 'agendas.IdServico', '=', 'servicos.id')
        ->selectRaw('SUM(servicos.preco) AS total_compras')
        ->first();
        $total_compras = $total_servicos_valores->total_compras;  

        return view('site.admin.estatistica.dashboard',[
            'funcionarios' => $funcionarios,
            'clientes' => $clientes,
            'servicos' => $servicos,
            'total_servicos_valores' => $total_compras,
            'dadosClientes' => $dadosClientes
        ]);
    }
}
