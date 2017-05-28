<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Supplier;

class SupplierController extends Controller
{

    public function index()
    {
        /*Se recibe todos los registros de la tabla categorias y se guardan en la variable $categories*/
        $suppliers = Supplier::all();  
        //dd($categories);
        return view('admin.supplier.index', compact('suppliers'));
    }

    public function create()
    {
        return view('admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request,[
            'name'      =>  'required|unique:suppliers|max:255',
            'modelo'    =>  'required',
        ]);

        $supplier = Supplier::create([
            'name'   =>  $request->get('name'),
            'slug'   =>  str_slug($request->get('name')),
            'description'   =>  $request->get('description'),
            'modelo'   =>   $request->get('modelo')
        ]);

        $message = $supplier? 'Supplier added!!!' : 'Add supplier failed!!!';
        return redirect()->route('admin.supplier.index')->with('message', $message);

    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Supplier $supplier)
    {
        return $supplier;
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Supplier $supplier)
    {
        return view('admin.supplier.edit',compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Supplier $supplier)
    {
        $supplier ->fill($request->all());
        $supplier->slug = str_slug($request->get('name'));

        $updated = $supplier->save();
        $message = $updated ? 'Supplier updated' : 'Supplier updated failed';

        return redirect()->route('admin.supplier.index')->with('message', $message);


    }

    public function destroy(Supplier $supplier)
    {
        $deleted = $supplier->delete();

        $message = $deleted ? 'Supplier deleted' : 'Supplier delete failed';

        return redirect()->route('admin.supplier.index')->with('message', $message);

    }
}
