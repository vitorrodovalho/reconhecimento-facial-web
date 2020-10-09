<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\ControlAreas;
use Illuminate\Http\Request;

class ControlAreasController extends Controller
{
    public function index(Request $request)
    {
        $control_areas = ControlAreas::all();
        $message = $request->session()->get('message');
        return view('control_areas.index', compact('control_areas', 'message'));
    }

    public function create()
    {
        return view('control_areas.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        ControlAreas::create($request->all());
        $request->session()->flash('message','stored');
        return redirect()->route('control_areas.index');
    }

    public function destroy(Request $request)
    {
        ControlAreas::destroy($request->control_area);
        $request->session()->flash('message','destroy');
        return redirect()->route('control_areas.index');
    }
}
