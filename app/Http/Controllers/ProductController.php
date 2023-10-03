<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductController extends Controller
{
    /**
     * GET Products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : JsonResource
    {
        $products = Product::with('category')->get();
        return ProductResource::collection($products);
    }

    /**
     * STORE a new product.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * SHOW the product
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * UPDATE the product
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * DELETE the product
     */
    public function destroy(Product $product)
    {
        //
    }
}
