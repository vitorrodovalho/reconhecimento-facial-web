<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    public function index(Request $request)
    {
        $departamentos = Departamento::all()->sortByDesc('id');
        $message = $request->session()->get('message');
        return view('departamentos.index', compact('departamentos', 'message'));
    }

    public function create()
    {
        return view('departamentos.create');
    }

    public function show($id)
    {
        $departamento = Departamento::find($id);
        return View('departamentos.create', compact('departamento'));
    }

    public function edit($id)
    {
        $departamento = Departamento::find($id);
        return View('departamentos.create', compact('departamento'));
    }

    public function store(Request $request)
    {
        try {
            Departamento::create($request->all());
            $request->session()->flash('message', "success");
            return redirect()->route('departamentos.index');
        } catch (\Exception $e) {
            return redirect()->route('departamentos.index')->withErrors(new \Illuminate\Support\MessageBag(['catch_exception' => $e->getCode()]));
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $departamento = Departamento::where('id', '=', $id)->first();
            $departamento->update($request->all());
            $request->session()->flash('message', "success_edit");
            return redirect()->route('departamentos.index');
        } catch (\Exception $e) {
            return redirect()->route('departamentos.index')->withErrors(new \Illuminate\Support\MessageBag(['catch_exception' => $e->getCode()]));
        }
    }

    public function destroy($id)
    {
        try {
            $delete = Departamento::where('id', $id)->delete();
            $delete ? $status = true : $status = false;
            return response()->json(['success' => $status]);
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }
    }
}
