<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function software()
    {
        // Ambil semua data course
        $courseSD = Course::where('kategori_kursus', 'SD')->get();

        // Kirim data ke view course.blade.php
        return view('software', compact('courseSD'));
    }

    public function mlai()
    {
        // Ambil semua data course
        $courseMLAI = Course::where('kategori_kursus', 'ML/AI')->get();

        // Kirim data ke view course.blade.php
        return view('ml-ai', compact('courseMLAI'));
    }

    public function iot()
    {
        // Ambil semua data course
        $courseIoT = Course::where('kategori_kursus', 'IoT')->get();

        // Kirim data ke view course.blade.php
        return view('iot', compact('courseIoT'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_materi' => 'required|string',
            'kategori_kursus' => 'required|string',
            'kategori_berlangganan' => 'required|string',
            'link_materi' => 'required|string',
        ]);

        $course = Course::create($request->all());
        return redirect()->back()->with('success', 'Course berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_materi' => 'required|string|max:255',
            'kategori_kursus' => 'required|string|max:255',
            'kategori_berlangganan' => 'required|string|max:255',
            'link_materi' => 'required|string|max:255',
        ]);

        // Ambil data product berdasarkan ID
        $course = Course::findOrFail($id);

        // Update data di database
        $course->update([
            'nama_materi' => $request->nama_materi,
            'kategori_kursus' => $request->kategori_kursus,
            'kategori_berlangganan' => $request->kategori_berlangganan,
            'link_materi' => $request->link_materi,
        ]);

        return redirect()->back()->with('success', 'Course berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Cari data berdasarkan ID
        $course = Course::findOrFail($id);

        // Hapus data dari database
        $course->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Course berhasil dihapus.');
    }
}
