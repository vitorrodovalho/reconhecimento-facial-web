<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductGroupRequest;
use App\Models\ProductGroups;
use Illuminate\Http\Request;

class ProductGroupsController extends Controller
{
    public function index(Request $request)
    {
        $product_groups = ProductGroups::all();
        $message = $request->session()->get('message');
        return view('product_groups.index', compact('product_groups', 'message'));
    }

    public function create()
    {
        return view('product_groups.create');
    }

    public function store(StoreProductGroupRequest $request)
    {
        ProductGroups::create($request->all());
        $request->session()->flash('message','stored');
        return redirect()->route('product_groups.index');
    }

    public function destroy(Request $request)
    {
        ProductGroups::destroy($request->product_group);
        $request->session()->flash('message','destroy');
        return redirect()->route('product_groups.index');
    }
}
