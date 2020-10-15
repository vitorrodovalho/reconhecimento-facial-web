<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use App\Models\ProductGroups;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::all()->sortByDesc('id');
        $message = $request->session()->get('message');
        return view('products.index', compact('products', 'message'));
    }

    public function create()
    {
        $productGroups = ProductGroups::pluck('code', 'id');
        $packaging = ProductGroups::pluck('code', 'id');
        return view('products.create', compact('productGroups', 'packaging'));
    }

    public function show($id)
    {
        $product = Product::find($id);
        $productGroups = ProductGroups::pluck('code', 'id');
        $packaging = ProductGroups::pluck('code', 'id');
        return View('products.create', compact('productGroups', 'packaging', 'product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $productGroups = ProductGroups::pluck('code', 'id');
        $packaging = ProductGroups::pluck('code', 'id');
        return View('products.create', compact('productGroups', 'packaging', 'product'));
    }

    public function store(StoreProductRequest $request)
    {
        try {
            Product::create($request->all());
            $request->session()->flash('message', "success");
            return redirect()->route('products.index');
        } catch (\Exception $e) {
            return redirect()->route('products.index')->withErrors(new \Illuminate\Support\MessageBag(['catch_exception' => $e->getCode()]));
        }
    }

    public function update(StoreProductRequest $request, $id)
    {
        try {
            $product = Product::where('id', '=', $id)->first();
            $product->update($request->all());
            $request->session()->flash('message', "success_edit");
            return redirect()->route('products.index');
        } catch (\Exception $e) {
            return redirect()->route('products.index')->withErrors(new \Illuminate\Support\MessageBag(['catch_exception' => $e->getCode()]));
        }
    }

    public function destroy($id)
    {
        try {
            $delete = Product::where('id', $id)->delete();
            $delete ? $status = true : $status = false;
            return response()->json(['success' => $status]);
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }
    }
}
