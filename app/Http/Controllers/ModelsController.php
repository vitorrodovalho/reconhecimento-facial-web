<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\Models;
use Illuminate\Http\Request;

class ModelsController extends Controller
{
    public function index(Request $request)
    {
        $models = Models::all();
        $message = $request->session()->get('message');
        return view('models.index', compact('models', 'message'));
    }

    public function create()
    {
        return view('models.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        Models::create($request->all());
        $request->session()->flash('message','stored');
        return redirect()->route('models.index');
    }

    public function destroy(Request $request)
    {
        Models::destroy($request->model);
        $request->session()->flash('message','destroy');
        return redirect()->route('models.index');
    }
}
