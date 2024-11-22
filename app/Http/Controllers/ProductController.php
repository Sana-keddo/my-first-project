<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(8);
        return view('dashboard-products',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        // return 123;
        return view('dashboard-insert-product',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //save photo in folder

        // $file_name = $this->saveImage($request->image ,'images/bodra');

        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            $path= 'public/images/img/';
            $file->move($path, $file_name );
        }

        Product::create([
            'name'=> $request->product_name,
            'price' => $request->price,
            'quantity'=> $request->quantity,
            'description' => $request->description,
            'expdate'=> $request->expdate,
            'category_id'=> $request->category_name,
            'image'=> $path.$file_name,
        ]);
        return redirect()->route('dashboard-products.index');
    }

    // protected function saveImage($image , $folder){

    //     $file_extension = $image->getClientOriginalExtension();
    //     $file_name = time().'.'.$file_extension;
    //     $path = $folder;
    //     $image->move($path, $file_name);

    //     return $file_name;
    // }


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
    public function edit($id)
    {
        $product = Product::find($id);

        $categories = Category::all();

        return view('edit-item',compact('product' ,'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // return $id;

        if($request->has('image')){

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $file_name = time().'.'.$extension;
            $path= 'public/images/img/';
            $file->move($path, $file_name );
        }

        $product = Product::findorfail($id);

        $product->update([
        'name'=> $request->product_name,
        'price' => $request->price,
        'quantity'=> $request->quantity,
        'description' => $request->description,
        'expdate'=> $request->expdate,
        'category_id'=> $request->category_name,
        'image'=> $path.$file_name,
        ]);

    //   return $request;
        return redirect()->route('dashboard-products.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $product = Product::findorfail($id);
        $product->delete();
        return redirect()->route('dashboard-products.index');
    }

}
