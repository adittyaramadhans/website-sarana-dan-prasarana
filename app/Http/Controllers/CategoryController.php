<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function updatecategory(Request $req){
        // dd($req->all());
        // $data = DB::table('categories')->where('id', $req->id)->update([
        //     'category' => $req->category,
        // ]);
        $id = $req->idedit;
        $data = Category::find($id);
        // dd($data);
        $data->category = $req->category;
        $data->update();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = DB::table('categories')->where('id', $id)->first();
        return response()->json($data);
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
