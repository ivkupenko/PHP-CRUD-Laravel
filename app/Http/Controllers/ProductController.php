<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Attribute;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('attributeValues.attribute')
            ->filterByQueryString()->orderBy('id', 'asc')->paginate(10)->appends($request->query());

        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        $attributes = Attribute::with('values')->get();

        return view('products.create', ['attributes' => $attributes]);
    }

    public function store(StoreProductsRequest $request)
    {
        $validated = $request->validated();

        $product = Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'count' => $validated['count'],
        ]);

        $this->syncProductAttributes($product, $validated['attributes'] ?? null);

        return redirect(route('products.index'));
    }

    public function edit(Product $product)
    {
        $attributes = Attribute::with('values')->get();
        $product->load('attributeValues.attribute');

        return view('products.edit', ['product' => $product, 'attributes' => $attributes]);
    }

    public function update(Product $product, UpdateProductsRequest $request)
    {
        $validated = $request->validated();

        $product->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'count' => $validated['count'],
        ]);

        $this->syncProductAttributes($product, $validated['attributes'] ?? null);

        return redirect(route('products.index'))->with('success', 'Product updated!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('success', 'Product deleted!');
    }

    private function syncProductAttributes(Product $product, array $attributes = null)
    {
        $product->attributeValues()->detach();

        if (empty($attributes)) {
            return;
        }

        foreach ($attributes as $attributeId => $valueIds) {
            foreach ($valueIds as $valueId) {
                $product->attributeValues()->attach($valueId, [
                    'attribute_id' => $attributeId,
                ]);
            }
        }
    }

    public function show(Product $product)
    {
        $product->load('attributeValues.attribute');
        return view('products.show', ['product' => $product]);

    }
}
