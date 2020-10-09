<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\Labels;
use Illuminate\Http\Request;

class LabelsController extends Controller
{
    public function index(Request $request)
    {
        $labels = Readers::all();
        $message = $request->session()->get('message');
        return view('labels.index', compact('labels', 'message'));
    }

    public function create()
    {
        return view('labels.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        Labels::create($request->all());
        $request->session()->flash('message','stored');
        return redirect()->route('labels.index');
    }

    public function destroy(Request $request)
    {
        Labels::destroy($request->label);
        $request->session()->flash('message','destroy');
        return redirect()->route('labels.index');
    }
}
