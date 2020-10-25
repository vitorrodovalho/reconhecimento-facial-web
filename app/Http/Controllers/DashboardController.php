<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;
use App\Models\Usuario;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $movimentacoes = Movimentacao::all()->sortByDesc('id');
        $qtd_acessos_autorizados = Movimentacao::all()
                                                ->where('cod_usuario', '<>', 'Desconhecido')
                                                ->count();
        $qtd_acessos_nao_autorizados = Movimentacao::all()
                                                    ->where('cod_usuario', '=', 'Desconhecido')
                                                    ->count();
        return view('dashboard', compact('movimentacoes', 'qtd_acessos_autorizados', 'qtd_acessos_nao_autorizados'));
    }
}
