<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Http\Requests\StoreCompanyRequest;
use App\Models\Products;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index(Request $request)
    {
        $companies = Companies::all('id', 'name', 'nickname', 'cnpj', 'currency', 'language')->sortByDesc('id');
        $message = $request->session()->get('message');
        return view('companies.index', compact('companies', 'message'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(StoreCompanyRequest $request)
    {
        try {
            Companies::create($request->all());
            $request->session()->flash('message', "success");
        } catch (Exception $exception) {
            $request->session()->flash('message', $exception->getMessage());
        }
        return redirect()->route('companies.index');
    }

    public function destroy($id)
    {
        try {
            $delete = Companies::where('id', $id)->delete();
            $delete ? $status = true : $status = false;
            return response()->json(['success' => $status]);
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }
    }
}
