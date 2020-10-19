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
        return view('dashboard', compact('movimentacoes'));
    }
}
