<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string',
            'category_detail' => 'required|string',
            'category_title' => 'required|string',
            'category_subscription' => 'required|string',
        ]);

        $category = Categories::create($request->all());
        return redirect('/')->with('success', 'Berhasil Yeey.');
    }

    // Menampilkan kategori berdasarkan ID
    // public function show($id)
    // {
    //     $category = Category::findOrFail($id);
    //     return response()->json($category);
    // }

    // // Memperbarui kategori berdasarkan ID
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'category_name' => 'string',
    //         'category_detail' => 'string',
    //         'category_title' => 'string',
    //         'category_subscription' => 'string',
    //         'category_desc' => 'string',
    //         'category_color' => 'string',
    //     ]);

    //     $category = Category::findOrFail($id);
    //     $category->update($request->all());
    //     return response()->json($category);
    // }

    // // Menghapus kategori berdasarkan ID
    // public function destroy($id)
    // {
    //     $category = Category::findOrFail($id);
    //     $category->delete();
    //     return response()->json(['message' => 'Category deleted successfully']);
    // }
}

