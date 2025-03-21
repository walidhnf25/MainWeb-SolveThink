<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil semua data product
        $product = Product::all();

        // Kirim data ke view product.blade.php
        return view('product', compact('product'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric|min:0',
            'link_shopee' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan file gambar jika ada
        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarNama = time() . '_' . $gambar->getClientOriginalName(); // Buat nama unik
            $gambar->move(public_path('product-images'), $gambarNama); // Simpan ke public
            $gambarPath = 'product-images/' . $gambarNama; // Simpan path ke database
        }

        // Simpan data ke database
        Product::create([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'link_shopee' => $request->link_shopee,
            'gambar' => $gambarPath,
        ]);

        // Redirect ke halaman tertentu dengan pesan sukses
        return redirect()->back()->with('success', 'Marketplace berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga_produk' => 'required|numeric|min:0',
            'link_shopee' => 'nullable|url',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Ambil data product berdasarkan ID
        $product = Product::findOrFail($id);

        // Simpan gambar baru jika ada
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($product->gambar && file_exists(public_path($product->gambar))) {
                unlink(public_path($product->gambar));
            }

            // Simpan gambar baru
            $gambar = $request->file('gambar');
            $gambarNama = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('product-images'), $gambarNama);
            $gambarPath = 'product-images/' . $gambarNama;
        } else {
            $gambarPath = $product->gambar; // Gunakan gambar lama jika tidak ada yang diunggah
        }

        // Update data di database
        $product->update([
            'nama_produk' => $request->nama_produk,
            'harga_produk' => $request->harga_produk,
            'link_shopee' => $request->link_shopee,
            'gambar' => $gambarPath,
        ]);

        return redirect()->back()->with('success', 'Marketplace berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Cari data berdasarkan ID
        $product = Product::findOrFail($id);

        // Hapus file gambar jika ada
        if ($product->gambar && file_exists(public_path($product->gambar))) {
            unlink(public_path($product->gambar));
        }

        // Hapus data dari database
        $product->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Item berhasil dihapus.');
    }
}
