<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $array = Product::with('user')->paginate(5);
        return view('products.index', compact('array'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_name' => 'required'
            ]);

        $user_id =  Auth::id();
        $data = $request->all();

        $imageName = time().'.'.$request->image->extension();
       $request->image->move(public_path('uploads'), $imageName);


//        echo '<pre>';
//        print_r($data);
//        $obj = new Product();
//        $obj->user_id  = $user_id;
//        $obj->name  = $data['product_name'];
//        $obj->type  = $data['type'];
//        $obj->description  = $data['description'];
//        $obj->qty  = $data['qty'];
//        $obj->price  = $data['price'];
//        $obj->save();

        //Mass Assignments

         Product::create([
           'user_id' =>  Auth::id(),
           'name' => $data['product_name'],
           'type' => $data['type'],
           'description' => $data['description'],
           'qty' => $data['qty'],
           'price' => $data['price'],
           'image' => $imageName
         ]);

         return redirect()->route('products');


    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        $obj = Product::find($id);

        return view('products.edit_form', compact('obj'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all();

        $obj = Product::find($data['id']);
        $obj->name  = $data['product_name'];
        $obj->type  = $data['type'];
        $obj->description  = $data['description'];
        $obj->qty  = $data['qty'];
        $obj->price  = $data['price'];
        $obj->update();


        return redirect()->route('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $id)
    {
        $obj = Product::find($id);

        if (!empty($obj))
        {
            $obj->delete();
        }

        return redirect()->route('products');
    }
}
