<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::filterByQueryString()->orderBy('id', 'asc')->paginate(10)->appends($request->query());

        return view('products.list', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(StoreProductsRequest $request)
    {
        Product::create($request->validated());

        return redirect(route('products.list'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, UpdateProductsRequest $request)
    {
        $product->update($request->validated());

        return redirect(route('products.list'))->with('success', 'Product updated!');
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect(route('products.list'))->with('success', 'Product deleted!');
    }
}
