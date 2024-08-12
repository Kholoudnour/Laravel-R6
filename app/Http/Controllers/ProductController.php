<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Trait\Common;



class ProductController extends Controller
{
    use Common;
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->take(3)->get();
        return view('index', compact('products'));

    }

    public function about()
    {
        return view('about');


    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('add_product');
            return "Data Added Successfuly";

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request -> validate([
    'title' => 'required|string', 
    'description' => 'required|string|max:1000',
    'price' => 'required|numeric', 
    'image' => 'required|mimes:png,jpg,jpeg|max:2048',

     ]);

     $data['published'] = isset ($request->published);
     $data['image']=$this->uploadFile($request->image, 'assets/images/product');
     product::create($data);
       return "Data Added Successfuly";
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $product = Product::findorfail($id);


        return view('products.edit', compact('product'));  
      }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|string',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
