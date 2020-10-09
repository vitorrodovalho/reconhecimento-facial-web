<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(Request $request)
    {
        $users = Users::all();
        $message = $request->session()->get('message');
        return view('users.index', compact('users', 'message'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        Users::create($request->all());
        $request->session()->flash('message','stored');
        return redirect()->route('users.index');
    }

    public function destroy(Request $request)
    {
        Users::destroy($request->company);
        $request->session()->flash('message','destroy');
        return redirect()->route('users.index');
    }
}
