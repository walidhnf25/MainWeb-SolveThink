<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use App\Models\Course;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function index()
    {
        $component = Component::paginate(4);
        $product = Product::paginate(3);
        $courseSD = Course::where('kategori_kursus', 'SD')->paginate(6, ['*'], 'courseSD');
        $courseMLAI = Course::where('kategori_kursus', 'ML/AI')->paginate(6, ['*'], 'courseMLAI');
        $courseIoT = Course::where('kategori_kursus', 'IoT')->paginate(6, ['*'], 'courseIoT');

        return view('index', compact('component', 'product', 'courseSD', 'courseMLAI', 'courseIoT'));
    }

    // public function proseslogin(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended('/');
    //     }

    //     return redirect('/')->with('warning', 'Email atau Password salah!');
    // }

    public function proseslogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                            ->with('success', 'Login berhasil! Selamat datang.');
        }

        // login gagal → flash warning
        return redirect('/')
            ->with('warning', 'Email atau Password salah!');
    }

    public function prosesregistrasi(Request $request)
{
    // Validasi input (jika gagal akan otomatis redirect back)
    $request->validate([
        'namaLengkap' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    try {
        // Simpan data ke database
        User::create([
            'name' => $request->namaLengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        // Sukses
        return redirect('/')
            ->with('success', 'Registrasi berhasil, silakan login.');
    } catch (\Exception $e) {
        // Gagal menyimpan (misalnya koneksi DB, error lain)
        return redirect('/')
            ->with('warning', 'Registrasi gagal. Silakan coba lagi.');
    }
}


    public function updateSubscription(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'tgl_berlangganan' => 'required|date',
        ]);

        // Get the currently authenticated user
        $user = auth()->user(); // Ensure the user is logged in

        $user->tgl_berlangganan = Carbon::parse($validated['tgl_berlangganan']);
        $user->save();

        return response()->json(['success' => true]);
    }

    public function logout()
    {
        Auth::logout();  // Log out the user
        return redirect('/');  // Redirect to the home page or wherever you want after logout
    }
}
