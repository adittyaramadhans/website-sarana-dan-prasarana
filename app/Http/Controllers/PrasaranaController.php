<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Category;
use App\Models\Prasarana;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrasaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prasarana = Prasarana::with('category_name', 'bangunan_name')->get();
        return view('prasarana.prasarana', ['prasarana' => $prasarana]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prasarana.tambah_prasarana',[
            'category' => Category::all(),
            'bangunan' => Bangunan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_prasarana' => 'required ',
            'bangunan' => 'required ',
            'category' => 'required ',
            'luas' => 'required ',
            'deskripsi' => 'required ',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $path = Storage::putFileAs('public/prasarana', $file, $filename);
            $data['photo'] = $filename;
        }

        Prasarana::create($data);

        return redirect()->route('prasarana.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prasarana $prasarana)
    {
        return view('prasarana.detail_prasarana', compact('prasarana'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prasarana = Prasarana::find($id);
        return view('prasarana.edit_prasarana', [
            'category' => Category::all(),
            'bangunan' => Bangunan::all(),
            'prasarana' => $prasarana,
        ]);

        return redirect()->route('prasarana.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prasarana $prasarana)
    {
        $validatedData = $request->validate([
            'nama_prasarana' => 'required',
            'bangunan' => 'required',
            'category' => 'required',
            'luas' => 'required',
            'deskripsi' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);
        $prasarana_colom = [
            'nama_prasarana' => $validatedData['nama_prasarana'],
            'bangunan' => $validatedData['bangunan'],
            'category' => $validatedData['category'],
            'luas' => $validatedData['luas'],
            'deskripsi' => $validatedData['deskripsi'],
        ];
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $path = Storage::putFileAs('public/prasarana', $file, $filename);
            $prasarana_colom['photo'] = $filename;
        }


        $prasarana = $prasarana->update($prasarana_colom);
        return redirect()->route('prasarana.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prasarana = Prasarana::find($id);
        $prasarana->delete();

        return redirect()->route('prasarana.index')->with('success', 'Data berhasil dihapus.');
    }
}
