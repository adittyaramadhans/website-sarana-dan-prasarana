<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::get();
        return view('category.category', ['category' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'category' => 'required ',
        ]);

        Category::create($data);

        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

        $validatedData = $request->validate([
            'category' => 'required',
        ]);
        $category_colom = [
            'category' => $validatedData['category'],
        ];

        $category =  $category->update($category_colom);
        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // $category = Category::find($id);
        // $category->delete();

        // return redirect()->route('category.index')->with('success', 'Data berhasil dihapus.');
    }
}
