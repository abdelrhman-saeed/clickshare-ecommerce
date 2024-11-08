<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        return view('products.index', ['products' => Product::paginate(3)]);
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        return view('products.create');
    }
    /**
     * @return RedirectResponse
     */
    public function store(StoreProductRequest $request): RedirectResponse
    {
        Product::create($request->validated());

        return redirect()->to(route('products.index'));
    }

    /**
     * Display the specified resource.
     * @return array
     */
    public function show(Product $product): array
    {
        return $product->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     * @return View
     */
    public function edit(Product $product): View
    {
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     * @return RedirectResponse
     */
    public function update(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        $product->update( $request->validated() );

        return redirect()->to(route('products.index'));
    }
    /**
     * @return RedirectResponse
     */
    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();

        return redirect()->to(route('products.index'));
    }
}
