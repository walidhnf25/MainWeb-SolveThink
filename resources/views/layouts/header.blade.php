<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-search me-2"></i>Solve<span class="fs-5">Think</span></h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('index') }}" class="nav-item nav-link {{ Request::routeIs('index') ? 'active' : '' }}">Home</a>
                <a href="about.html" class="nav-item nav-link {{ Request::is('about*') ? 'active' : '' }}">About</a>
                <a href="{{ route('marketplace.index') }}" class="nav-item nav-link {{ Request::routeIs('marketplace.index') ? 'active' : '' }}">Marketplace</a>
                <a href="{{ route('product.index') }}" class="nav-item nav-link {{ Request::is('product*') ? 'active' : '' }}">Product</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('team*') || Request::is('testimonial*') || Request::is('404*') ? 'active' : '' }}" data-bs-toggle="dropdown">Course</a>
                    <div class="dropdown-menu m-0">
                        <a href="team.html" class="dropdown-item {{ Request::is('team*') ? 'active' : '' }}">Software Development</a>
                        <a href="testimonial.html" class="dropdown-item {{ Request::is('testimonial*') ? 'active' : '' }}">Internet of Things</a>
                        <a href="404.html" class="dropdown-item {{ Request::is('404*') ? 'active' : '' }}">Machine Learning</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link {{ Request::is('contact*') ? 'active' : '' }}">Contact</a>
            </div>
            <button type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            @guest
                <a href="#" class="btn btn-success text-light rounded-pill py-2 px-4 ms-2" data-bs-toggle="modal" data-bs-target="#registrasiModal">Daftar</a>
            @endguest
            <!-- If user is not logged in, show the Login button -->
            @if (Auth::guest())
                <a href="#" class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
            @else
            <div class="dropdown">
                <a href="#" class="btn btn-secondary text-light rounded-pill py-1 px-3 ms-2 dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle me-2 fs-5"></i> <!-- Memperbesar ikon pengguna -->
                    <span class="fs-6">{{ Auth::user()->name }}</span> <!-- Menampilkan nama pengguna yang sudah login -->
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li>
                        <!-- Tombol logout -->
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
            @endif
        </div>
    </nav>

        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->

<!-- Registrasi Modal -->
<div class="modal fade" id="registrasiModal" tabindex="-1" aria-labelledby="registrasiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title" id="registrasiModalLabel">Form Registrasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form action="{{ route('prosesregistrasi') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-success">Registrasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('proseslogin') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>