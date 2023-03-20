<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $offset = $request->input('offset', 0);
        $products = Product::with('imagenPrincipal')->skip($offset)->take(6)->get();
        /*dd($products);*/
        $totalProducts = Product::count();

        return view('productos.index', compact('products', 'totalProducts', 'offset'));

    }

    public function getProducts(Request $request)
    {
        $offset = $request->input('offset', 0);
        $products = Product::with('imagenPrincipal')->skip($offset)->take(6)->get();
        $totalProducts = Product::count();
        return response()->json([
            'products' => $products,
            'totalProducts' => $totalProducts,
            'offset' => $offset
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $product = Product::with(['productSizeColors.size', 'productSizeColors.color'])->find($id);
        $uniqueColors = $product->getUniqueColors($request->input('color_id'));
        $uniqueSizes = $product->getUniqueSizes($request->input('size_id'));
        return view('productos.show', compact('product', 'uniqueColors', 'uniqueSizes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
