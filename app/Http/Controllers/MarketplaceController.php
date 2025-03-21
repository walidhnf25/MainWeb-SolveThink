<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marketplace;

class MarketplaceController extends Controller
{
    public function index()
    {
        // Ambil semua data marketplace
        $marketplace = Marketplace::all();

        // Kirim data ke view marketplace.blade.php
        return view('marketplace', compact('marketplace'));
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
            $gambar->move(public_path('marketplace-images'), $gambarNama); // Simpan ke public
            $gambarPath = 'marketplace-images/' . $gambarNama; // Simpan path ke database
        }

        // Simpan data ke database
        Marketplace::create([
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'link_shopee' => $request->link_shopee,
            'gambar' => $gambarPath,
        ]);

        // Redirect ke halaman tertentu dengan pesan sukses
        return redirect()->back()->with('success', 'Marketplace berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'harga_barang' => 'required|numeric|min:0',
            'link_shopee' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil data marketplace berdasarkan ID
        $marketplace = Marketplace::findOrFail($id);

        // Simpan gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($marketplace->gambar && file_exists(public_path($marketplace->gambar))) {
                unlink(public_path($marketplace->gambar));
            }

            // Simpan gambar baru
            $gambar = $request->file('gambar');
            $gambarNama = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('marketplace-images'), $gambarNama);
            $gambarPath = 'marketplace-images/' . $gambarNama;
        } else {
            $gambarPath = $marketplace->gambar; // Gunakan gambar lama jika tidak ada yang diunggah
        }

        // Update data di database
        $marketplace->update([
            'nama_barang' => $request->nama_barang,
            'harga_barang' => $request->harga_barang,
            'link_shopee' => $request->link_shopee,
            'gambar' => $gambarPath,
        ]);

        return redirect()->back()->with('success', 'Marketplace berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Cari data berdasarkan ID
        $marketplace = Marketplace::findOrFail($id);

        // Hapus file gambar jika ada
        if ($marketplace->gambar && file_exists(public_path($marketplace->gambar))) {
            unlink(public_path($marketplace->gambar));
        }

        // Hapus data dari database
        $marketplace->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Item berhasil dihapus.');
    }
}
