<?php

namespace App\Http\Controllers;

use App\Models\Turno;
use Illuminate\Http\Request;

class TurnosController extends Controller
{
    public function index(Request $request)
    {
        $turnos = Turno::all()->sortByDesc('id');
        $message = $request->session()->get('message');
        return view('turnos.index', compact('turnos', 'message'));
    }

    public function create()
    {
        return view('turnos.create');
    }

    public function show($id)
    {
        $turno = Turno::find($id);
        return View('turnos.create', compact('turno'));
    }

    public function edit($id)
    {
        $turno = Turno::find($id);
        return View('turnos.create', compact('turno'));
    }

    public function store(Request $request)
    {
        try {
            Turno::create($request->all());
            $request->session()->flash('message', "success");
            return redirect()->route('turnos.index');
        } catch (\Exception $e) {
            return redirect()->route('turnos.index')->withErrors(new \Illuminate\Support\MessageBag(['catch_exception' => $e->getCode()]));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $turno = Turno::where('id', '=', $id)->first();
            $turno->update($request->all());
            $request->session()->flash('message', "success_edit");
            return redirect()->route('turnos.index');
        } catch (\Exception $e) {
            return redirect()->route('turnos.index')->withErrors(new \Illuminate\Support\MessageBag(['catch_exception' => $e->getCode()]));
        }
    }

    public function destroy($id)
    {
        try {
            $delete = Turno::where('id', $id)->delete();
            $delete ? $status = true : $status = false;
            return response()->json(['success' => $status]);
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }
    }
}
