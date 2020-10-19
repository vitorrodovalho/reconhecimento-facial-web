<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    public function index(Request $request)
    {
        $movimentacoes = Movimentacao::all()->sortByDesc('id');
        return view('movimentacoes.index', compact('movimentacoes'));
    }
}
