<?php

namespace App\Http\Controllers;

use App\Models\Sarana;
use App\Models\Category;
use App\Models\Pelaporan;
use App\Models\Pengadaan;
use App\Models\Prasarana;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sarana = Sarana::with('category_name', 'prasarana_name')->get();
        return view('sarana.sarana', ['sarana' => $sarana]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sarana.tambah_sarana',[
            // 'category' => Category::all(),
            'prasarana' => Prasarana::all(),
        ]);

        return redirect()->route('sarana.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'QrCode' => 'required ',
            'sarana' => 'required ',
            'jenis' => 'required ',
            'prasarana' => 'required ',
            // 'jumlah' => 'required ',
            'harga' => 'required ',
            // 'category' => 'required ',
            // 'tanggal' => 'required ',
            'deskripsi' => 'required ',
        ]);
        $data = [
            'sarana' => $request->sarana,
            'jenis' => $request->jenis,
            'prasarana' => $request->prasarana,
            // 'jumlah' => $request->jumlah,
            'harga' => $request->harga,
            // 'category' => $request->category,
            // 'tanggal' => $request->tanggal,
            'deskripsi' => $request->deskripsi,
        ];


        if ($request->hasFile('photo_sarana')) {
            $file = $request->file('photo_sarana');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $path = Storage::putFileAs('public/sarana', $file, $filename);
            $data['photo_sarana'] = $filename;
        }

        Sarana::create($data);

        return redirect()->route('sarana.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($sarana)
    {
        $sarana = Sarana::where('id', $sarana)->withSum('pengadaan', 'jumlah')->withSum('pelaporan', 'jumlah')->first();
        // dd($sarana);
        $pengadaan = Pengadaan::where('sarana_id', $sarana->id)->get();
        $pelaporan = Pelaporan::where('sarana_id', $sarana->id)->get();
        $category = Category::all();
        return view('sarana.detail_sarana', compact('sarana', 'pengadaan', 'category', 'pelaporan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sarana = Sarana::find($id);
        return view('sarana.edit_sarana', [
            'prasarana' => Prasarana::all(),
            'sarana' => $sarana,
        ]);

        return redirect()->route('sarana.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sarana $sarana)
    {
        $validatedData = $request->validate([
            'sarana' => 'required',
            'jenis' => 'required',
            'prasarana' => 'required',
            // 'jumlah' => 'required',
            'harga' => 'required',
            // 'category' => 'required',
            // 'tanggal' => 'required',
            'deskripsi' => 'required',
        ]);
        $sarana_colom = [
            'sarana' => $validatedData['sarana'],
            'jenis' => $validatedData['jenis'],
            'prasarana' => $validatedData['prasarana'],
            // 'jumlah' => $validatedData['jumlah'],
            'harga' => $validatedData['harga'],
            // 'category' => $validatedData['category'],
            // 'tanggal' => $validatedData['tanggal'],
            'deskripsi' => $validatedData['deskripsi'],
        ];
        if ($request->hasFile('photo_sarana')) {
            $file = $request->file('photo_sarana');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $path = Storage::putFileAs('public/sarana', $file, $filename);
            $prasarana_colom['photo_sarana'] = $filename;
        }

        $sarana =  $sarana->update($sarana_colom);
        return redirect()->route('sarana.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sarana = Sarana::find($id);
        $sarana->delete();

        return back()->with('success', 'Data berhasil dihapus.');
    }
}
