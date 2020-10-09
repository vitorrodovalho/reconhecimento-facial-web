<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\Printers;
use Illuminate\Http\Request;

class PrintersController extends Controller
{
    public function index(Request $request)
    {
        $printers = Printers::all();
        $message = $request->session()->get('message');
        return view('printers.index', compact('printers', 'message'));
    }

    public function create()
    {
        return view('printers.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        Printers::create($request->all());
        $request->session()->flash('message','stored');
        return redirect()->route('printers.index');
    }

    public function destroy(Request $request)
    {
        Printers::destroy($request->printer);
        $request->session()->flash('message','destroy');
        return redirect()->route('printers.index');
    }
}
