<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\ProductGroups;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index(Request $request)
    {
        $usuarios = Usuario::all()->sortByDesc('id');
        $message = $request->session()->get('message');
        return view('usuarios.index', compact('usuarios', 'message'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        return View('usuarios.create', compact('usuario'));
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return View('usuarios.create', compact('usuario'));
    }

    public function store(StoreUsuarioRequest $request)
    {
        try {
            Usuario::create($request->all());
            $request->session()->flash('message', "success");
            return redirect()->route('usuarios.index');
        } catch (\Exception $e) {
            return redirect()->route('usuarios.index')->withErrors(new \Illuminate\Support\MessageBag(['catch_exception' => $e->getCode()]));
        }
    }

    public function update(StoreUsuarioRequest $request, $id)
    {
        try {
            $usuario = Usuario::where('id', '=', $id)->first();
            $usuario->update($request->all());
            $request->session()->flash('message', "success_edit");
            return redirect()->route('products.index');
        } catch (\Exception $e) {
            return redirect()->route('products.index')->withErrors(new \Illuminate\Support\MessageBag(['catch_exception' => $e->getCode()]));
        }
    }

    public function destroy($id)
    {
        try {
            $delete = Usuario::where('id', $id)->delete();
            $delete ? $status = true : $status = false;
            return response()->json(['success' => $status]);
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }
    }
}
