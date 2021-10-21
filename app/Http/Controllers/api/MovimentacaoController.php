<?php

namespace App\Http\Controllers\api;;

use App\Models\Movimentacao;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    public function index(Request $request)
    {
        return "teste";
        return Movimentacao::orderBy('movimentacao_id', 'desc')->get();
    }

    public function store(Request $request)
    {
        return response()->json(Movimentacao::create($request->all()), 201);
    }
}
