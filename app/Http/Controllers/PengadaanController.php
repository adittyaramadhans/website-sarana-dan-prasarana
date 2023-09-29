<?php

namespace App\Http\Controllers;

use App\Models\Sarana;
use App\Models\Category;
use App\Models\Pengadaan;
use App\Models\Prasarana;
use Illuminate\Http\Request;

class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengadaan = Pengadaan::with('category_name')->get();
        return view('pengadaan.pengadaan', ['pengadaan' => $pengadaan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengadaan.tambah_pengadaan',[
            'category' => Category::all(),
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            // 'QrCode' => 'required ',
            'sarana_id' => 'required',
            'jumlah' => 'required ',
            'category' => 'required ',
            'status' => 'required ',
            'tanggal' => 'required ',
        ]);

        Pengadaan::create($data);

        return redirect()->route('sarana.show', $request->sarana_id)->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengadaan $pengadaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $sarana_id)
    {
        return view('pengadaan.edit_pengadaan', [
            'category' => Category::all(),
            'sarana' => Sarana::where('id',$sarana_id)->first(),
        ]);

        return back()->with('success', 'Data berhasil diubah.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengadaan $pengadaan)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengadaan = Pengadaan::find($id);
        $pengadaan->delete();

        return back()->with('success', 'Data berhasil dihapus.');
    }
}
