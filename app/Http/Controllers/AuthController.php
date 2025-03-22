<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Marketplace;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use App\Models\Categories;

class AuthController extends Controller
{
    public function index()
    {
        $marketplace = Marketplace::paginate(4);
        $product = Product::paginate(3);
        $categories = Categories::all();
        return view('index', compact('marketplace', 'product', 'categories'));
    }

    public function proseslogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        return redirect('/dashboard')->with('warning', 'Email atau Password salah!');
    }

    public function prosesregistrasi(Request $request)
    {
        // Validasi input
        $request->validate([
            'namaLengkap' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        // Simpan data ke database
        User::create([
            'name' => $request->namaLengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        // Redirect ke halaman tertentu dengan pesan sukses
        return redirect()->route('/')->with('success', 'Registrasi berhasil, silakan login.');
    }

    public function logout()
    {
        Auth::logout();  // Log out the user
        return redirect('/');  // Redirect to the home page or wherever you want after logout
    }
}
