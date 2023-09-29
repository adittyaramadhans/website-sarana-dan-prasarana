<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BangunanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bangunan = Bangunan::with('category_name')->get();
        return view('bangunan.bangunan', ['bangunan' => $bangunan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bangunan.tambah_bangunan',[
            'category' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'bangunan' => 'required ',
            'tanggal' => 'required ',
            'tanggal_sl' => 'required ',
            'category' => 'required ',
            'harga' => 'required ',
            'deskripsi' => 'required ',
        ]);

        if ($request->hasFile('photo_bangunan')) {
            $file = $request->file('photo_bangunan');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $path = Storage::putFileAs('public/bangunan', $file, $filename);
            $data['photo_bangunan'] = $filename;
        }

        Bangunan::create($data);

        return redirect()->route('bangunan.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bangunan $bangunan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bangunan $bangunan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bangunan $bangunan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bangunan $bangunan)
    {
        //
    }
}
