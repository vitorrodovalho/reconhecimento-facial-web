<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\ProductGroups;
use App\Models\Products;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isNull;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Products::all()->sortByDesc('id');
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
        $product = Products::find($id);
        $productGroups = ProductGroups::pluck('code', 'id');
        $packaging = ProductGroups::pluck('code', 'id');
        return View('products.create', compact('productGroups', 'packaging', 'product'));
    }

    public function edit($id)
    {
        $product = Products::find($id);
        $productGroups = ProductGroups::pluck('code', 'id');
        $packaging = ProductGroups::pluck('code', 'id');
        return View('products.create', compact('productGroups', 'packaging', 'product'));
    }

    public function store(StoreProductRequest $request)
    {
        try {
            Products::create($request->all());
            $request->session()->flash('message', "success");
            return redirect()->route('products.index');
        } catch (\Exception $e) {
            return redirect()->route('products.index')->withErrors(new \Illuminate\Support\MessageBag(['catch_exception' => $e->getCode()]));
        }
    }

    public function update(StoreProductRequest $request, $id)
    {
        try {
            $product = Products::where('id', '=', $id)->first();
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
            $delete = Products::where('id', $id)->delete();
            $delete ? $status = true : $status = false;
            return response()->json(['success' => $status]);
        } catch (\Exception $e) {
            return response()->json(['success' => false]);
        }
    }
}
