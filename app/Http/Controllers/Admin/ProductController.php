<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SaveProductRequest;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Supplier;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(4);
        //dd($products);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->lists('name', 'id');
        $suppliers = Supplier::orderBy('id', 'desc')->lists('name', 'id');

        //dd($categories);
        return view('admin.product.create', compact('categories','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveProductRequest $request)
    {
        $data = [
                'name'          =>  $request->get('name'),
                'slug'          =>  str_slug($request->get('name')),
                'description'   =>  $request->get('description'),
                'extract'       =>  $request->get('extract'),
                'price'         =>  $request->get('price'),
                'image'         =>  $request->get('image'),
                'visible'       =>  $request->has('visible')? 1 : 0,
                'category_id'   =>  $request->get('category_id'),
                 'supplier_id'   =>  $request->get('supplier_id')

        ];
        $product = Product::create($data);

        $message = $product ? 'Product created' :  'Producted create failed';
        return redirect()->route('admin.product.index')->with('message', $message);
    }

    /**
     * Display the specified resource.

     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('id', 'desc')->lists('name', 'id');
        $suppliers = Supplier::orderBy('id', 'desc')->lists('name', 'id');


        return view('admin.product.edit',compact('categories','suppliers', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(SaveProductRequest $request, Product $product)
    {
        $product->fill($request->all());
        $product->slug = str_slug($request->get('name'));
        $product->visible = $request->has('visible') ? 1 : 0;

        $updated = $product->save();

        $message = $updated ? "Product updated" : "Product update failed";

        return redirect()->route('admin.product.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Product $product)
    {
       $deleted = $product->delete();
       $message = $deleted ? "Product deleted" : "Product delete failed";

        return redirect()->route('admin.product.index')->with('message',$message);
    }
}
