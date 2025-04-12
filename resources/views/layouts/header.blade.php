<!-- Navbar & Hero Start -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 w-100">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <img src="{{ asset('img/st_new_1.png') }}" alt="SolveThink Logo" class="img-fluid" style="max-height: 70px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('index') }}" class="nav-item nav-link {{ Request::routeIs('index') ? 'active' : '' }}">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('software*') || Request::is('ml-ai*') || Request::is('iot*') ? 'active' : '' }}" data-bs-toggle="dropdown">E-Learning</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('software') }}" class="dropdown-item {{ Request::is('software*') ? 'active' : '' }}">Software Development</a>
                        <a href="{{ route('ml-ai') }}" class="dropdown-item {{ Request::is('ml-ai*') ? 'active' : '' }}">ML AI Data Science</a>
                        <a href="{{ route('iot') }}" class="dropdown-item {{ Request::is('iot*') ? 'active' : '' }}">Internet of Things</a>
                    </div>
                </div>
                <a href="{{ route('component.index') }}" class="nav-item nav-link {{ Request::routeIs('component.index') ? 'active' : '' }}">Electronic Component</a>
                <!-- <a href="{{ route('product.index') }}" class="nav-item nav-link {{ Request::is('product*') ? 'active' : '' }}">Product</a> -->
                <a href="{{ route('about.index') }}" class="nav-item nav-link {{ Request::is('about*') ? 'active' : '' }}">About</a>
                <a href="contact.html" class="nav-item nav-link {{ Request::is('contact*') ? 'active' : '' }}">Contact</a>
            </div>
            <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            @if (Auth::guest())
                <a href="#" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
            @else
            <div class="dropdown">
                <a href="#" class="btn btn-secondary text-light rounded-pill py-1 px-3 ms-2 dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle me-2 fs-5"></i>
                    <span class="fs-6">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
                    </li>
                </ul>
            </div>
            @endif
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->

<!-- Registrasi Modal -->
<div class="modal fade" id="registrasiModal" tabindex="-1" aria-labelledby="registrasiModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg overflow-hidden">
            <!-- Modal Header -->
            <div class="modal-header text-white justify-content-center position-relative">
                <h5 class="modal-title" id="registrasiModalLabel"><i class="bi bi-person-fill"></i> Registrasi Akun</h5>
                <!-- Tombol X untuk Batal -->
                <button type="button" class="btn btn-sm position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Cancel" style="background-color: transparent; border: none;">
                    <i class="bi bi-x-lg fs-4 text-dark"></i>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body bg-light p-4">
                <form action="{{ route('prosesregistrasi') }}" method="POST">
                    @csrf
                    <div class="mb-3 position-relative">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control rounded-end" id="namaLengkap" name="namaLengkap" placeholder="Masukkan nama lengkap" required>
                        </div>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control rounded-end" id="email" name="email" placeholder="Masukkan email" required>
                        </div>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control rounded-end" id="password" name="password" placeholder="Masukkan password" required>
                        </div>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="confirmPassword" class="form-label">Konfirmasi Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control rounded-end" id="confirmPassword" name="confirmPassword" placeholder="Masukkan ulang password" required>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn text-white rounded-pill btn-registrasi">Registrasi</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <p class="text-center mt-2">Sudah memiliki akun? <a href="#" id="openLoginModal">Masuk</a></p>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow-lg overflow-hidden">
            <div class="modal-header text-white justify-content-center position-relative">
                <h5 class="modal-title mx-auto" id="loginModalLabel">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                </h5>
                <button type="button" class="btn btn-sm position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Cancel" style="background-color: transparent; border: none;">
                    <i class="bi bi-x-lg fs-4 text-dark"></i>
                </button>
            </div>
            <div class="modal-body bg-light p-4">
                <div id="loginAlert" class="alert alert-danger alert-dismissible fade show mb-3" role="alert" style="display: none;">
                    <span id="loginAlertMessage"></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <form action="{{ route('proseslogin') }}" method="POST">
                    @csrf
                    <div class="mb-3 position-relative">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control rounded-end" id="email" name="email" placeholder="Masukkan email" required>
                        </div>
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text bg-primary text-white"><i class="bi bi-lock"></i></span>
                            <input type="password" class="form-control rounded-end" id="password" name="password" placeholder="Masukkan password" required>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn text-white rounded-pill mb-2 btn-login"
                        style="background: linear-gradient(90deg, #4B6CB7, #182848);">Login</button>
                        <hr class="my-2">
                        <button type="button" class="btn btn-outline-danger rounded-pill"><i class="bi bi-google"></i> Masuk dengan Google</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <p class="text-center mt-2">Belum punya akun? <a href="#" id="openRegisterModal">Daftar sekarang</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '{{ session('success') }}',
        });
    </script>
@endif

@if (session('warning'))
    <script>
        Swal.fire({
            icon: 'warning',
            title: 'Gagal',
            text: '{{ session('warning') }}',
        });
    </script>
@endif

{{-- Validasi gagal dari Laravel --}}
@if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Registrasi Gagal',
            html: `{!! implode('<br>', $errors->all()) !!}`
        });
    </script>
@endif



<script>
document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("openRegisterModal").addEventListener("click", function () {
        var loginModalEl = document.getElementById('loginModal');
        var registerModalEl = document.getElementById('registrasiModal');

        var loginModal = bootstrap.Modal.getInstance(loginModalEl);
        var registerModal = new bootstrap.Modal(registerModalEl);

        loginModal.hide(); // Tutup modal login

        loginModalEl.addEventListener('hidden.bs.modal', function () {
            registerModal.show(); // Tampilkan modal registrasi setelah modal login tertutup
        }, { once: true });
    });

    document.getElementById("openLoginModal").addEventListener("click", function () {
        var loginModalEl = document.getElementById('loginModal');
        var registerModalEl = document.getElementById('registrasiModal');

        var loginModal = new bootstrap.Modal(loginModalEl);
        var registerModal = bootstrap.Modal.getInstance(registerModalEl);

        registerModal.hide(); // Tutup modal registrasi

        registerModalEl.addEventListener('hidden.bs.modal', function () {
            loginModal.show(); // Tampilkan modal login setelah modal registrasi tertutup
        }, { once: true });
    });
});



</script>
 <script>
    document.addEventListener('DOMContentLoaded', () => {
      @if(session('success'))
        showLoginSuccess(@json(session('success')));
      @endif

      @if(session('warning'))
        showLoginError(@json(session('warning')));
      @endif
    });
  </script>