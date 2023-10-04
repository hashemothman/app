<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $var = Product::first()->paginate(5);
        return view('admin.home' , compact('var'));
    }


    public function userindex()
    {
        $var = Product::latest()->paginate(5);
        return view('user.home' , compact('var'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:products|max:255',
            'price'=>'required|gt:1',
            'desc'=>'required|max:255',
        ]);
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'desc' => $request->desc,
            'category_id' => $request->category_id,
        ]);
        return redirect()->route('product.index')->with('success' , 'product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.show' , compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        return view('admin.edit' ,compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name'=>'required|unique:products|max:255',
            'price'=>'required|gt:1',
            'desc'=>'required|max:255',
        ]);
        $product->update($request->all());
        return redirect()->route('product.index')->with('success' , 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
