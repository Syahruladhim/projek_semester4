<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Data Kriteria';
    $kriterias = Kriteria::all();
    return view('kriteria.index', compact('title', 'kriterias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Menampilkan form untuk membuat kriteria baru (belum diimplementasikan)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Menyimpan kriteria baru (belum diimplementasikan)
    }

    /**
     * Display the specified resource.
     */
    public function show(Kriteria $kriteria)
    {
        // Menampilkan kriteria tertentu (belum diimplementasikan)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kriteria $kriteria)
    {
        $title = 'Edit Kriteria';
    return view('kriteria.edit', compact('title', 'kriteria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kriteria $kriteria)
    {
        $request->validate([
            'nama_kriteria' => 'required|string|max:255',
            'atribut' => 'required|string|max:255',
            'bobot' => 'required|numeric',
        ]);

        $kriteria->nama_kriteria = $request->input('nama_kriteria');
        $kriteria->atribut = $request->input('atribut');
        $kriteria->bobot = $request->input('bobot');
        $kriteria->save();

        return redirect()->route('kriteria.index')->with('success', 'Kriteria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kriteria $kriteria)
    {
        // Menghapus kriteria tertentu (belum diimplementasikan)
    }
}

