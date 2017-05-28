<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        /*Se recibe todos los registros de la tabla categorias y se guardan en la variable $categories*/
        $categories = Category::all();  
        //dd($categories);
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
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
            'name'      =>  'required|unique:categories|max:255',
            'modelo'    =>  'required',
        ]);

        $category = Category::create([
            'name'   =>  $request->get('name'),
            'slug'   =>  str_slug($request->get('name')),
            'description'   =>  $request->get('description'),
            'modelo'   =>   $request->get('modelo')
        ]);

        $message = $category ? 'Category added!!!' : 'Add category failed!!!';
        return redirect()->route('admin.category.index')->with('message', $message);

    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Category $category)
    {
        return $category;
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Category $category)
    {
        $category ->fill($request->all());
        $category->slug = str_slug($request->get('name'));

        $updated = $category->save();
        $message = $updated ? 'Category updated' : 'Category updated failed';

        return redirect()->route('admin.category.index')->with('message', $message);


    }

    public function destroy(Category $category)
    {
        $deleted = $category->delete();

        $message = $deleted ? 'Category deleted' : 'Category delete failed';

        return redirect()->route('admin.category.index')->with('message', $message);

    }
}
