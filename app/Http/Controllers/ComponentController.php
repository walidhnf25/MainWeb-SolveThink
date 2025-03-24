<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component;

class ComponentController extends Controller
{
    public function index()
    {
        // Ambil semua data component
        $component = Component::all();

        // Kirim data ke view component.blade.php
        return view('component', compact('component'));
    }
    
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga_barang' => 'required|numeric|min:0',
            'link_shopee' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan file gambar jika ada
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarNama = time() . '_' . $gambar->getClientOriginalName(); // Buat nama unik
            $gambar->move(public_path('component-images'), $gambarNama); // Simpan ke public
            $gambarPath = 'component-images/' . $gambarNama; // Simpan path ke database
        }

        // Simpan data ke database
        Component::create([
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'link_shopee' => $request->link_shopee,
            'gambar' => $gambarPath,
        ]);

        // Redirect ke halaman tertentu dengan pesan sukses
        return redirect()->back()->with('success', 'Component Electronics berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga_barang' => 'required|numeric|min:0',
            'link_shopee' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil data component berdasarkan ID
        $component = Component::findOrFail($id);

        // Simpan gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($component->gambar && file_exists(public_path($component->gambar))) {
                unlink(public_path($component->gambar));
            }

            // Simpan gambar baru
            $gambar = $request->file('gambar');
            $gambarNama = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('component-images'), $gambarNama);
            $gambarPath = 'component-images/' . $gambarNama;
        } else {
            $gambarPath = $component->gambar; // Gunakan gambar lama jika tidak ada yang diunggah
        }

        // Update data di database
        $component->update([
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'link_shopee' => $request->link_shopee,
            'gambar' => $gambarPath,
        ]);

        return redirect()->back()->with('success', 'Componen Electronics berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Cari data berdasarkan ID
        $component = Component::findOrFail($id);

        // Hapus file gambar jika ada
        if ($component->gambar && file_exists(public_path($component->gambar))) {
            unlink(public_path($component->gambar));
        }

        // Hapus data dari database
        $component->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Item berhasil dihapus.');
    }
}
