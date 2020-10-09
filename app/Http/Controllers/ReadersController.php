<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Readers;
use DataTables;
use Illuminate\Http\Request;
use Alert;

class ReadersController extends Controller
{
    public function index(Request $request)
    {
        $readers = Readers::all();
        $message = $request->session()->get('message');
        return view('readers.index', compact('readers', 'message'));
    }

    public function create()
    {
        return view('readers.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        Readers::create($request->all());
        $request->session()->flash('message','stored');
        return redirect()->route('readers.index');
    }

    public function destroy(Request $request)
    {
        Readers::destroy($request->company);
        $request->session()->flash('message','destroy');
        return redirect()->route('readers.index');
    }
}
