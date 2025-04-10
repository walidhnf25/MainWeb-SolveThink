@extends('layouts.tabler')
@section('content')
    <div class="container-fluid bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <div class="container-fluid py-5 bg-primary hero-header">
                <div class="container my-5 py-2 px-lg-5">
                    <div class="row align-items-center">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">SolveThink</h1>
                            <p class="text-white pb-3 animated zoomIn">
                                Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem.
                            </p>
                            <button id="subscribeButton" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Berlangganan</button>
                            <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-6 text-center">
                            <img class="img-fluid animated zoomIn" src="img/robotic.png" alt=""
                            style="max-width: 80%; height: auto; margin-top: -20px; margin-bottom: 50px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Subs -->
        <div class="modal fade" id="subscriptionModal" tabindex="-1" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title w-100 text-center" id="subscriptionModalLabel">
                            <i class="bi bi-bag"></i> Paket Berlangganan
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-center gap-4">
                            <div class="card text-start shadow-sm border-0" style="width: 18rem; border-radius: 12px;">
                                <div class="card-header bg-primary text-white rounded-top text-center">
                                    Free Trial
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Rp. 0/bulan</h5>
                                    <p class="card-text text-muted mb-4">Akses seluruh materi dalam E-Learning untuk pengguna baru</p>
                                    <div class="text-center mb-3">
                                        <button class="btn btn-primary px-4 py-2 rounded-pill w-100" onclick="subscribe('free')">Free Trial</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card text-start shadow-sm border-0" style="width: 18rem; border-radius: 12px;">
                                <div class="card-header bg-success text-white rounded-top text-center">
                                    Premium
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Rp. 5.000/bulan</h5>
                                    <p class="card-text text-muted mb-4">Akses seluruh materi dalam E-Learning untuk pengguna premium</p>
                                    <div class="text-center mb-3">
                                        <button class="btn btn-success px-4 py-2 rounded-pill w-100 "onclick="subscribe('premium')">Daftar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Start -->
        <div class="container-fluid">
            <div class="container px-lg-5">
                <div class="row g-5 d-flex align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">The best .... solution dengan pengalaman terbaik.</h2>
                        </div>
                        <p class="mb-4">SolveThink Menyediakan:</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Bimbingan Belajar</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Materi Pembelajaran</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Komponen Elektronika</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Produk SW dan HW</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-whatsapp"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center d-flex justify-content-center align-items-center">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/robotic2.png" style="max-width: 90%; height: auto; margin-right: -40px;">
                    </div>
                </div>
            </div>
        </div>



        <div class="container py-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Our E-Learning</h6>
                <h2 class="mt-2">Materi-Materi Pembelajaran</h2>
            </div>

            @if(auth()->user() && auth()->user()->role === 'admin')
            <div class="d-flex justify-content-end mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <a href="#" class="btn btn-primary" id="btnTambahCourse">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            @endif
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="btn px-3 pe-4 active" data-filter="all">All</li>
                        <li class="btn px-3 pe-4" data-filter="free">Free</li>
                        <li class="btn px-3 pe-4" data-filter="premium">Premium</li>
                    </ul>
                </div>
            </div>
            <div class="category-section mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h2 class="mt-1">Software Development</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach ($courseSD as $d)
                        @if ($d->kategori_kursus === 'SD')
                        <div class="col card-item {{ strtolower($d->kategori_berlangganan) }}">
                            <div class="card bg-neon-blue shadow-lg h-100">
                            @if(auth()->check() && auth()->user()->role === 'admin')
                                <div class="position-absolute top-0 end-0 m-2 d-flex">
                                    <a href="#" class="btn btn-success btn-sm me-1 btnEditCourse" data-id="{{ $d->id }}" data-nama="{{ $d->nama_materi }}" data-kursus="{{ $d->kategori_kursus }}" data-berlangganan="{{ $d->kategori_berlangganan }}" data-link="{{ $d->link_materi }}"><i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('course.destroy', $d->id) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm delete-confirm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        </form>
                                </div>
                            @endif
                                <div class="card-body d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 180px;">
                                    <h4 class="card-title fw-bold">{{ $d->nama_materi }}</h4>
                                    <a href="{{ $d->link_materi }}" class="btn btn-outline-dark rounded-pill mt-3" target="_blank" rel="noopener noreferrer">View more →</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 text-end">
                    @if(count($courseSD) > 2)
                        <a href="{{ route('software') }}" class="btn btn-primary">
                            More <i class="fa fa-angle-double-right"></i>
                        </a>
                    @endif
                </div>
            </div>
            <div class="category-section mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h2 class="mt-1">Machine Learning/Artificial Intelligence</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach ($courseMLAI as $d)
                        @if ($d->kategori_kursus === 'ML/AI')
                        <div class="col card-item {{ strtolower($d->kategori_berlangganan) }}">
                            <div class="card bg-neon-red shadow-lg h-100">
                            @if(auth()->check() && auth()->user()->role === 'admin')
                                <div class="position-absolute top-0 end-0 m-2 d-flex">
                                    <a href="#" class="btn btn-success btn-sm me-1 btnEditCourse" data-id="{{ $d->id }}" data-nama="{{ $d->nama_materi }}" data-kursus="{{ $d->kategori_kursus }}" data-berlangganan="{{ $d->kategori_berlangganan }}" data-link="{{ $d->link_materi }}"><i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('course.destroy', $d->id) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm delete-confirm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        </form>
                                </div>
                            @endif
                                <div class="card-body d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 180px;">
                                    <h4 class="card-title fw-bold">{{ $d->nama_materi }}</h4>
                                    <a href="{{ $d->link_materi }}" class="btn btn-outline-dark rounded-pill mt-3" target="_blank" rel="noopener noreferrer">View more →</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 text-end">
                    @if(count($courseMLAI) > 2)
                        <a href="{{ route('ml-ai') }}" class="btn btn-primary">
                            More <i class="fa fa-angle-double-right"></i>
                        </a>
                    @endif
                </div>
            </div>
            <div class="category-section mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h2 class="mt-1">Internet of Things</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach ($courseIoT as $d)
                        @if ($d->kategori_kursus === 'IoT')
                        <div class="col card-item {{ strtolower($d->kategori_berlangganan) }}">
                            <div class="card bg-neon-yellow shadow-lg h-100">
                            @if(auth()->check() && auth()->user()->role === 'admin')
                                <div class="position-absolute top-0 end-0 m-2 d-flex">
                                    <a href="#" class="btn btn-success btn-sm me-1 btnEditCourse" data-id="{{ $d->id }}" data-nama="{{ $d->nama_materi }}" data-kursus="{{ $d->kategori_kursus }}" data-berlangganan="{{ $d->kategori_berlangganan }}" data-link="{{ $d->link_materi }}"><i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('course.destroy', $d->id) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm delete-confirm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        </form>
                                </div>
                            @endif
                                <div class="card-body d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 180px;">
                                    <h4 class="card-title fw-bold">{{ $d->nama_materi }}</h4>
                                    <a href="{{ $d->link_materi }}" class="btn btn-outline-dark rounded-pill mt-3" target="_blank" rel="noopener noreferrer">View more →</a>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-12 text-end">
                    @if(count($courseIoT) > 2)
                        <a href="{{ route('iot') }}" class="btn btn-primary">
                            More <i class="fa fa-angle-double-right"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Electronic Component</h6>
                    <h2 class="mt-2">Komponen-Komponen Elektronika</h2>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 text-end">
                        @if(auth()->check() && auth()->user()->role === 'admin')
                            <a href="#" class="btn btn-primary" id="btnTambahComponent">
                                <i class="fa fa-plus"></i>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="row g-3">
                    @foreach($component as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                            <div class="card border-0 shadow rounded position-relative" style="max-width: 250px; margin: auto;">
                                @if(auth()->check() && auth()->user()->role === 'admin')
                                    <div class="position-absolute top-0 end-0 m-2 d-flex">
                                        <a href="#" class="btn btn-success btn-sm me-1 btnEditComponent" data-id="{{ $item->id }}" data-nama="{{ $item->nama_barang }}" data-harga="{{ $item->harga_barang }}" data-link="{{ $item->link_shopee }}" data-gambar="{{ asset($item->gambar) }}"><i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('component.destroy', $item->id) }}" method="POST" class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger btn-sm delete-confirm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                @endif
                                <div class="card-body p-0">
                                    @if($item->gambar)
                                        <img src="{{ asset($item->gambar) }}" alt="{{ $item->nama_barang }}" class="img-fluid w-100 rounded-top" style="height: 150px; object-fit: cover;">
                                    @else
                                        <img src="https://via.placeholder.com/250x150" alt="Placeholder" class="img-fluid w-100 rounded-top" style="height: 150px; object-fit: cover;">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->nama_barang }}</h5>
                                        <p class="card-text text-muted"><i class="fa fa-money-bill me-2"></i>Rp. {{ number_format($item->harga_barang, 0, ',', '.') }}</p>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a href="{{ $item->link_shopee }}" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                                    <path fill="#f4511e" d="M36.683,43H11.317c-2.136,0-3.896-1.679-3.996-3.813l-1.272-27.14C6.022,11.477,6.477,11,7.048,11 h33.904c0.571,0,1.026,0.477,0.999,1.047l-1.272,27.14C40.579,41.321,38.819,43,36.683,43z"></path>
                                                    <path fill="#f4511e" d="M32.5,11.5h-2C30.5,7.364,27.584,4,24,4s-6.5,3.364-6.5,7.5h-2C15.5,6.262,19.313,2,24,2 S32.5,6.262,32.5,11.5z"></path>
                                                    <path fill="#fafafa" d="M24.248,25.688c-2.741-1.002-4.405-1.743-4.405-3.577c0-1.851,1.776-3.195,4.224-3.195 c1.685,0,3.159,0.66,3.888,1.052c0.124,0.067,0.474,0.277,0.672,0.41l0.13,0.087l0.958-1.558l-0.157-0.103 c-0.772-0.521-2.854-1.733-5.49-1.733c-3.459,0-6.067,2.166-6.067,5.039c0,3.257,2.983,4.347,5.615,5.309 c3.07,1.122,4.934,1.975,4.934,4.349c0,1.828-2.067,3.314-4.609,3.314c-2.864,0-5.326-2.105-5.349-2.125l-0.128-0.118l-1.046,1.542 l0.106,0.087c0.712,0.577,3.276,2.458,6.416,2.458c3.619,0,6.454-2.266,6.454-5.158C30.393,27.933,27.128,26.741,24.248,25.688z"></path>
                                                </svg>
                                            </a>
                                            <a href="{{ $item->link_shopee }}" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 64 64">
                                                    <linearGradient id="BByzyhRg08SueoHenzjo7a_QxTCUohbBw9U_gr1" x1="32.135" x2="32.135" y1="1.445" y2="51.043" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6dc7ff"></stop><stop offset=".492" stop-color="#aab9ff"></stop><stop offset="1" stop-color="#e6abff"></stop></linearGradient><path fill="url(#BByzyhRg08SueoHenzjo7a_QxTCUohbBw9U_gr1)" d="M54,13.6v24.51c0,8.79-7.12,15.91-15.9,15.91H10.27V13.6h12.59c2.93,0,6.62,1.99,9.28,4.64 c2.65-2.65,6.34-4.64,9.27-4.64H54z"></path><circle cx="22.859" cy="30.163" r="9.276" fill="#fff"></circle><circle cx="41.411" cy="30.163" r="9.276" fill="#fff"></circle><path fill="#fff" d="M44,48.473c0,0.799-0.109,2.78-0.298,3.527H20.568c-0.189-0.746-0.298-2.728-0.298-3.527 C20.27,42.688,25.583,38,32.14,38C38.687,38,44,42.688,44,48.473z"></path><linearGradient id="BByzyhRg08SueoHenzjo7b_QxTCUohbBw9U_gr2" x1="23.522" x2="23.522" y1="-3.418" y2="63.822" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><circle cx="23.522" cy="30.825" r="4.638" fill="url(#BByzyhRg08SueoHenzjo7b_QxTCUohbBw9U_gr2)"></circle><circle cx="21.203" cy="27.181" r="2.982" fill="#fff"></circle><path fill="#fff" d="M41.41,14.6c-2.53,0-5.97,1.74-8.57,4.34c-0.19,0.2-0.45,0.3-0.7,0.3c-0.26,0-0.52-0.1-0.71-0.3 c-2.6-2.6-6.04-4.34-8.57-4.34H11.27v38.42H38.1c8.21,0,14.9-6.69,14.9-14.91V14.6H41.41z M51,38.11 c0,7.12-5.79,12.91-12.9,12.91H13.27V16.6h9.59c1.69,0,4.69,1.29,7.15,3.76c0.57,0.56,1.32,0.88,2.13,0.88 c0.8,0,1.55-0.32,2.12-0.88c2.46-2.47,5.46-3.76,7.15-3.76H51V38.11z"></path><linearGradient id="BByzyhRg08SueoHenzjo7c_QxTCUohbBw9U_gr3" x1="32.135" x2="32.135" y1="-3.418" y2="63.822" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><path fill="url(#BByzyhRg08SueoHenzjo7c_QxTCUohbBw9U_gr3)" d="M41.067,20.23 c-3.929,0-7.322,2.299-8.932,5.617c-1.61-3.318-5.003-5.617-8.933-5.617c-5.477,0-9.932,4.455-9.932,9.932s4.456,9.933,9.932,9.933 c3.929,0,7.323-2.299,8.933-5.618c1.61,3.318,5.003,5.618,8.932,5.618c5.477,0,9.933-4.456,9.933-9.933S46.544,20.23,41.067,20.23z M23.203,38.095c-4.374,0-7.932-3.559-7.932-7.933c0-4.373,3.558-7.932,7.932-7.932s7.933,3.559,7.933,7.932 C31.135,34.536,27.577,38.095,23.203,38.095z M41.067,38.095c-4.374,0-7.932-3.559-7.932-7.933c0-4.373,3.558-7.932,7.932-7.932 S49,25.789,49,30.162C49,34.536,45.441,38.095,41.067,38.095z"></path><linearGradient id="BByzyhRg08SueoHenzjo7d_QxTCUohbBw9U_gr4" x1="40.749" x2="40.749" y1="-3.418" y2="63.822" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><circle cx="40.749" cy="30.825" r="4.638" fill="url(#BByzyhRg08SueoHenzjo7d_QxTCUohbBw9U_gr4)"></circle><circle cx="38.43" cy="27.181" r="2.982" fill="#fff"></circle><linearGradient id="BByzyhRg08SueoHenzjo7e_QxTCUohbBw9U_gr5" x1="31.85" x2="31.85" y1="37.11" y2="43.98" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6dc7ff"></stop><stop offset=".492" stop-color="#aab9ff"></stop><stop offset="1" stop-color="#e6abff"></stop></linearGradient><path fill="url(#BByzyhRg08SueoHenzjo7e_QxTCUohbBw9U_gr5)" d="M36.57,39.3l-4.43,4.44l-0.24,0.24 l-4.77-4.77c1.14-1.29,2.82-2.1,4.67-2.1c0.12,0,0.22,0.02,0.34,0.02C33.91,37.22,35.48,38.04,36.57,39.3z"></path><linearGradient id="BByzyhRg08SueoHenzjo7f_QxTCUohbBw9U_gr6" x1="31.846" x2="31.846" y1="-4.535" y2="62.706" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><path fill="url(#BByzyhRg08SueoHenzjo7f_QxTCUohbBw9U_gr6)" d="M31.9,45.278l-6.142-6.143l0.623-0.704 c1.369-1.549,3.344-2.438,5.419-2.438c0.091,0,0.175,0.006,0.258,0.014l0.133,0.007c1.997,0.102,3.82,0.994,5.135,2.515 l0.608,0.703L31.9,45.278z M28.562,39.112l3.337,3.337l3.25-3.258c-0.865-0.709-1.924-1.121-3.061-1.179 c-0.035,0.004-0.123-0.005-0.208-0.013c-0.007,0-0.015,0-0.021,0C30.619,38,29.474,38.398,28.562,39.112z"></path><linearGradient id="BByzyhRg08SueoHenzjo7g_QxTCUohbBw9U_gr7" x1="32.135" x2="32.135" y1="-3.418" y2="63.822" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><path fill="url(#BByzyhRg08SueoHenzjo7g_QxTCUohbBw9U_gr7)" d="M54,12.6H42.264 c-0.798-4.877-5.03-8.616-10.129-8.616S22.804,7.723,22.006,12.6H10.27c-0.55,0-1,0.45-1,1v40.42c0,0.55,0.45,1,1,1H38.1 c9.32,0,16.9-7.59,16.9-16.91V13.6C55,13.05,54.55,12.6,54,12.6z M32.135,5.984c4.025,0,7.384,2.89,8.122,6.703 c-2.603,0.367-5.616,1.906-8.117,4.172c-2.51-2.266-5.523-3.805-8.126-4.172C24.751,8.875,28.11,5.984,32.135,5.984z M53,38.11 c0,8.22-6.69,14.91-14.9,14.91H11.27V14.6h11.59c2.53,0,5.97,1.74,8.57,4.34c0.19,0.2,0.45,0.3,0.71,0.3c0.25,0,0.51-0.1,0.7-0.3 c2.6-2.6,6.04-4.34,8.57-4.34H53V38.11z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 text-end">
                        @if(count($component) > 3)
                            <a href="{{ route('component.index') }}" class="btn btn-primary">
                                More <i class="fa fa-angle-double-right"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Start -->

        <!-- Service End -->

        <!-- Portfolio Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Product</h6>
                    <h2 class="mt-2">Produk Software dan Hardware</h2>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 text-end">
                        @if(auth()->check() && auth()->user()->role === 'admin')
                            <a href="#" class="btn btn-primary" id="btnTambahProduct">
                                <i class="fa fa-plus"></i>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="product-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                            <li class="btn px-3 pe-4" data-filter=".first">Software</li>
                            <li class="btn px-3 pe-4" data-filter=".second">Hardware</li>
                            <li class="btn px-3 pe-4" data-filter=".third">Software + Hardware</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4">
                @foreach($product as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="card border-0 shadow rounded overflow-hidden position-relative">
                            @if(auth()->check() && auth()->user()->role === 'admin')
                                <div class="position-absolute top-0 end-0 m-2 d-flex">
                                    <a href="#" class="btn btn-success btn-sm me-1 btnEditProduct" data-id="{{ $item->id }}" data-nama="{{ $item->nama_produk }}" data-harga="{{ $item->harga_produk }}" data-link="{{ $item->link_shopee }}" data-gambar="{{ asset($item->gambar) }}"><i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ route('product.destroy', $item->id) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm delete-confirm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            @endif
                            @if($item->gambar)
                                <img class="img-fluid w-100" src="{{ asset($item->gambar) }}" alt="{{ $item->nama_produk }}">
                            @else
                                <img class="img-fluid w-100" src="https://via.placeholder.com/300x200" alt="Placeholder">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                                <p class="card-text text-muted"><i class="fa fa-money-bill me-2"></i>Rp. {{ number_format($item->harga_produk, 0, ',', '.') }}</p>
                                <div class="d-flex justify-content-center mt-3">
                                    <a href="{{ $item->link_shopee }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                            <path fill="#f4511e" d="M36.683,43H11.317c-2.136,0-3.896-1.679-3.996-3.813l-1.272-27.14C6.022,11.477,6.477,11,7.048,11 h33.904c0.571,0,1.026,0.477,0.999,1.047l-1.272,27.14C40.579,41.321,38.819,43,36.683,43z"></path>
                                            <path fill="#f4511e" d="M32.5,11.5h-2C30.5,7.364,27.584,4,24,4s-6.5,3.364-6.5,7.5h-2C15.5,6.262,19.313,2,24,2 S32.5,6.262,32.5,11.5z"></path>
                                            <path fill="#fafafa" d="M24.248,25.688c-2.741-1.002-4.405-1.743-4.405-3.577c0-1.851,1.776-3.195,4.224-3.195 c1.685,0,3.159,0.66,3.888,1.052c0.124,0.067,0.474,0.277,0.672,0.41l0.13,0.087l0.958-1.558l-0.157-0.103 c-0.772-0.521-2.854-1.733-5.49-1.733c-3.459,0-6.067,2.166-6.067,5.039c0,3.257,2.983,4.347,5.615,5.309 c3.07,1.122,4.934,1.975,4.934,4.349c0,1.828-2.067,3.314-4.609,3.314c-2.864,0-5.326-2.105-5.349-2.125l-0.128-0.118l-1.046,1.542 l0.106,0.087c0.712,0.577,3.276,2.458,6.416,2.458c3.619,0,6.454-2.266,6.454-5.158C30.393,27.933,27.128,26.741,24.248,25.688z"></path>
                                        </svg>
                                    </a>
                                    <a href="{{ $item->link_shopee }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 64 64">
                                            <linearGradient id="BByzyhRg08SueoHenzjo7a_QxTCUohbBw9U_gr1" x1="32.135" x2="32.135" y1="1.445" y2="51.043" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6dc7ff"></stop><stop offset=".492" stop-color="#aab9ff"></stop><stop offset="1" stop-color="#e6abff"></stop></linearGradient><path fill="url(#BByzyhRg08SueoHenzjo7a_QxTCUohbBw9U_gr1)" d="M54,13.6v24.51c0,8.79-7.12,15.91-15.9,15.91H10.27V13.6h12.59c2.93,0,6.62,1.99,9.28,4.64 c2.65-2.65,6.34-4.64,9.27-4.64H54z"></path><circle cx="22.859" cy="30.163" r="9.276" fill="#fff"></circle><circle cx="41.411" cy="30.163" r="9.276" fill="#fff"></circle><path fill="#fff" d="M44,48.473c0,0.799-0.109,2.78-0.298,3.527H20.568c-0.189-0.746-0.298-2.728-0.298-3.527 C20.27,42.688,25.583,38,32.14,38C38.687,38,44,42.688,44,48.473z"></path><linearGradient id="BByzyhRg08SueoHenzjo7b_QxTCUohbBw9U_gr2" x1="23.522" x2="23.522" y1="-3.418" y2="63.822" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><circle cx="23.522" cy="30.825" r="4.638" fill="url(#BByzyhRg08SueoHenzjo7b_QxTCUohbBw9U_gr2)"></circle><circle cx="21.203" cy="27.181" r="2.982" fill="#fff"></circle><path fill="#fff" d="M41.41,14.6c-2.53,0-5.97,1.74-8.57,4.34c-0.19,0.2-0.45,0.3-0.7,0.3c-0.26,0-0.52-0.1-0.71-0.3 c-2.6-2.6-6.04-4.34-8.57-4.34H11.27v38.42H38.1c8.21,0,14.9-6.69,14.9-14.91V14.6H41.41z M51,38.11 c0,7.12-5.79,12.91-12.9,12.91H13.27V16.6h9.59c1.69,0,4.69,1.29,7.15,3.76c0.57,0.56,1.32,0.88,2.13,0.88 c0.8,0,1.55-0.32,2.12-0.88c2.46-2.47,5.46-3.76,7.15-3.76H51V38.11z"></path><linearGradient id="BByzyhRg08SueoHenzjo7c_QxTCUohbBw9U_gr3" x1="32.135" x2="32.135" y1="-3.418" y2="63.822" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><path fill="url(#BByzyhRg08SueoHenzjo7c_QxTCUohbBw9U_gr3)" d="M41.067,20.23 c-3.929,0-7.322,2.299-8.932,5.617c-1.61-3.318-5.003-5.617-8.933-5.617c-5.477,0-9.932,4.455-9.932,9.932s4.456,9.933,9.932,9.933 c3.929,0,7.323-2.299,8.933-5.618c1.61,3.318,5.003,5.618,8.932,5.618c5.477,0,9.933-4.456,9.933-9.933S46.544,20.23,41.067,20.23z M23.203,38.095c-4.374,0-7.932-3.559-7.932-7.933c0-4.373,3.558-7.932,7.932-7.932s7.933,3.559,7.933,7.932 C31.135,34.536,27.577,38.095,23.203,38.095z M41.067,38.095c-4.374,0-7.932-3.559-7.932-7.933c0-4.373,3.558-7.932,7.932-7.932 S49,25.789,49,30.162C49,34.536,45.441,38.095,41.067,38.095z"></path><linearGradient id="BByzyhRg08SueoHenzjo7d_QxTCUohbBw9U_gr4" x1="40.749" x2="40.749" y1="-3.418" y2="63.822" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><circle cx="40.749" cy="30.825" r="4.638" fill="url(#BByzyhRg08SueoHenzjo7d_QxTCUohbBw9U_gr4)"></circle><circle cx="38.43" cy="27.181" r="2.982" fill="#fff"></circle><linearGradient id="BByzyhRg08SueoHenzjo7e_QxTCUohbBw9U_gr5" x1="31.85" x2="31.85" y1="37.11" y2="43.98" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#6dc7ff"></stop><stop offset=".492" stop-color="#aab9ff"></stop><stop offset="1" stop-color="#e6abff"></stop></linearGradient><path fill="url(#BByzyhRg08SueoHenzjo7e_QxTCUohbBw9U_gr5)" d="M36.57,39.3l-4.43,4.44l-0.24,0.24 l-4.77-4.77c1.14-1.29,2.82-2.1,4.67-2.1c0.12,0,0.22,0.02,0.34,0.02C33.91,37.22,35.48,38.04,36.57,39.3z"></path><linearGradient id="BByzyhRg08SueoHenzjo7f_QxTCUohbBw9U_gr6" x1="31.846" x2="31.846" y1="-4.535" y2="62.706" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><path fill="url(#BByzyhRg08SueoHenzjo7f_QxTCUohbBw9U_gr6)" d="M31.9,45.278l-6.142-6.143l0.623-0.704 c1.369-1.549,3.344-2.438,5.419-2.438c0.091,0,0.175,0.006,0.258,0.014l0.133,0.007c1.997,0.102,3.82,0.994,5.135,2.515 l0.608,0.703L31.9,45.278z M28.562,39.112l3.337,3.337l3.25-3.258c-0.865-0.709-1.924-1.121-3.061-1.179 c-0.035,0.004-0.123-0.005-0.208-0.013c-0.007,0-0.015,0-0.021,0C30.619,38,29.474,38.398,28.562,39.112z"></path><linearGradient id="BByzyhRg08SueoHenzjo7g_QxTCUohbBw9U_gr7" x1="32.135" x2="32.135" y1="-3.418" y2="63.822" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#1a6dff"></stop><stop offset="1" stop-color="#c822ff"></stop></linearGradient><path fill="url(#BByzyhRg08SueoHenzjo7g_QxTCUohbBw9U_gr7)" d="M54,12.6H42.264 c-0.798-4.877-5.03-8.616-10.129-8.616S22.804,7.723,22.006,12.6H10.27c-0.55,0-1,0.45-1,1v40.42c0,0.55,0.45,1,1,1H38.1 c9.32,0,16.9-7.59,16.9-16.91V13.6C55,13.05,54.55,12.6,54,12.6z M32.135,5.984c4.025,0,7.384,2.89,8.122,6.703 c-2.603,0.367-5.616,1.906-8.117,4.172c-2.51-2.266-5.523-3.805-8.126-4.172C24.751,8.875,28.11,5.984,32.135,5.984z M53,38.11 c0,8.22-6.69,14.91-14.9,14.91H11.27V14.6h11.59c2.53,0,5.97,1.74,8.57,4.34c0.19,0.2,0.45,0.3,0.71,0.3c0.25,0,0.51-0.1,0.7-0.3 c2.6-2.6,6.04-4.34,8.57-4.34H53V38.11z"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row mt-3">
                    <div class="col-md-12 text-end">
                        @if(count($product) > 2)
                            <a href="{{ route('product.index') }}" class="btn btn-primary">
                                More <i class="fa fa-angle-double-right"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->

        <div class="modal fade" id="modal-inputcomponent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Electronic Component</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('component.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="namaLengkap" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                                            placeholder="Nama Barang">
                                    </div>
                                    <div class="mb-3">
                                        <label for="namaLengkap" class="form-label">Harga Barang</label>
                                        <input type="text" class="form-control" id="harga_barang" name="harga_barang"
                                            placeholder="Harga Barang">
                                    </div>
                                    <div class="mb-3">
                                        <label for="namaLengkap" class="form-label">Link Shoppe</label>
                                        <input type="text" class="form-control" id="link_shopee" name="link_shopee"
                                            placeholder="Link Shoppe">
                                    </div>
                                    <div class="mb-3">
                                        <label for="uploadGambar" class="form-label">Upload Gambar</label>
                                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary flex-grow-1">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-edit-component" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Electronic Component</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formEditComponent" action="" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" id="edit_id" name="id">
                            <div class="mb-3">
                                <label for="edit_nama_barang" class="form-label">Nama Barang</label>
                                <input type="text" class="form-control" id="edit_nama_barang" name="nama_barang">
                            </div>
                            <div class="mb-3">
                                <label for="edit_harga_barang" class="form-label">Harga Barang</label>
                                <input type="text" class="form-control" id="edit_harga_barang" name="harga_barang">
                            </div>
                            <div class="mb-3">
                                <label for="edit_link_shopee" class="form-label">Link Shopee</label>
                                <input type="text" class="form-control" id="edit_link_shopee" name="link_shopee">
                            </div>
                            <div class="mb-3">
                                <label for="edit_gambar" class="form-label">Upload Gambar</label>
                                <input type="file" class="form-control" id="edit_gambar" name="gambar" accept="image/*">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success flex-grow-1">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-inputproduct" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="namaLengkap" class="form-label">Nama Produk</label>
                                        <input type="text" class="form-control" id="nama_produk" name="nama_produk"
                                            placeholder="Nama Produk">
                                    </div>
                                    <div class="mb-3">
                                        <label for="namaLengkap" class="form-label">Harga Produk</label>
                                        <input type="text" class="form-control" id="harga_produk" name="harga_produk"
                                            placeholder="Harga Produk">
                                    </div>
                                    <div class="mb-3">
                                        <label for="namaLengkap" class="form-label">Link Shoppe</label>
                                        <input type="text" class="form-control" id="link_shopee" name="link_shopee"
                                            placeholder="Link Shoppe">
                                    </div>
                                    <div class="mb-3">
                                        <label for="uploadGambar" class="form-label">Upload Gambar</label>
                                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group d-flex justify-content-center">
                                                <button type="submit" class="btn btn-primary flex-grow-1">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-edit-product" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Produk</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formEditProduct" action="" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" id="edit_id" name="id">
                            <div class="mb-3">
                                <label for="edit_nama_produk" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="edit_nama_produk" name="nama_produk">
                            </div>
                            <div class="mb-3">
                                <label for="edit_harga_produk" class="form-label">Harga Produk</label>
                                <input type="text" class="form-control" id="edit_harga_produk" name="harga_produk">
                            </div>
                            <div class="mb-3">
                                <label for="edit_link_shopee1" class="form-label">Link Shopee</label>
                                <input type="text" class="form-control" id="edit_link_shopee1" name="link_shopee">
                            </div>
                            <div class="mb-3">
                                <label for="edit_gambar1" class="form-label">Upload Gambar</label>
                                <input type="file" class="form-control" id="edit_gambar1" name="gambar" accept="image/*">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success flex-grow-1">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add New Materi -->
        <div class="modal fade" id="modal-inputcourse" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Materi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addCardForm" action="{{ route('course.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nama_materi" class="form-label">Name Materi</label>
                                <input type="text" class="form-control" id="nama_materi" name="nama_materi" placeholder="Nama Materi">
                            </div>
                            <div class="mb-3">
                                <label for="kategori_kursus" class="form-label">Kategori Kursus</label>
                                <select class="form-select" id="kategori_kursus" name="kategori_kursus">
                                    <option value="" disabled selected>-- Pilih Kategori Kursus --</option>
                                    <option value="SD">Software Development</option>
                                    <option value="ML/AI">Machine Learning/AI</option>
                                    <option value="IoT">Internet of Things</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kategori_berlangganan" class="form-label">Kategori Berlangganan</label>
                                <select class="form-select" id="kategori_berlangganan" name="kategori_berlangganan">
                                    <option value="" disabled selected>-- Pilih Kategori Berlangganan --</option>
                                    <option value="Free">Free</option>
                                    <option value="Premium">Premium</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="link_materi" class="form-label">Link Materi</label>
                                <input type="text" class="form-control" id="link_materi" name="link_materi" placeholder="Link Materi">
                            </div>
                                <button type="submit" class="btn btn-primary w-100">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <div class="modal fade" id="modal-edit-course" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Materi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formEditCourse" action="" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" id="edit_id" name="id">
                            <div class="mb-3">
                                <label for="nama_materi" class="form-label">Name Materi</label>
                                <input type="text" class="form-control" id="edit_nama_materi" name="nama_materi">
                            </div>
                            <div class="mb-3">
                                <label for="kategori_kursus" class="form-label">Kategori Kursus</label>
                                <select class="form-select" id="edit_kategori_kursus" name="kategori_kursus">
                                    <option value="" disabled selected>-- Pilih Kategori Kursus --</option>
                                    <option value="SD">Software Development</option>
                                    <option value="ML/AI">Machine Learning/AI</option>
                                    <option value="IoT">Internet of Things</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kategori_berlangganan" class="form-label">Kategori Berlangganan</label>
                                <select class="form-select" id="edit_kategori_berlangganan" name="kategori_berlangganan">
                                    <option value="" disabled selected>-- Pilih Kategori Berlangganan --</option>
                                    <option value="Free">Free</option>
                                    <option value="Premium">Premium</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="link_materi" class="form-label">Link Materi</label>
                                <input type="text" class="form-control" id="edit_link_materi" name="link_materi">
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success flex-grow-1">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('myscript')
    <script>
        $(document).ready(function () {
            $('#portfolio-flters li').click(function () {
                // Ubah tombol aktif
                $('#portfolio-flters li').removeClass('active');
                $(this).addClass('active');

                let filterValue = $(this).data('filter');

                $('.card-item').each(function () {
                    let item = $(this);

                    if (filterValue === 'all') {
                        item.removeClass('hide');
                    } else {
                        if (item.hasClass(filterValue)) {
                            item.removeClass('hide');
                        } else {
                            item.addClass('hide');
                        }
                    }
                });
            });
        });

        $(document).ready(function() {
            // Menampilkan modal untuk menambah tipe pekerjaan
            $("#btnTambahComponent").click(function() {
                $('#modal-inputcomponent').modal('show');
            });
        });

        $(document).on("click", ".btnEditComponent", function () {
            let id = $(this).data("id");
            let nama = $(this).data("nama");
            let harga = $(this).data("harga");
            let link = $(this).data("link");
            let gambar = $(this).data("gambar");

            $("#edit_id").val(id);
            $("#edit_nama_barang").val(nama);
            $("#edit_harga_barang").val(harga);
            $("#edit_link_shopee").val(link);
            $("#preview_gambar").attr("src", gambar);

            // Set action URL pada form edit
            $("#formEditComponent").attr("action", "/component/update/" + id);

            $("#modal-edit-component").modal("show");
        });

        $(document).on("click", ".btnEditProduct", function () {
            let id = $(this).data("id");
            let nama = $(this).data("nama");
            let harga = $(this).data("harga");
            let link = $(this).data("link");
            let gambar = $(this).data("gambar");

            $("#edit_id").val(id);
            $("#edit_nama_produk").val(nama);
            $("#edit_harga_produk").val(harga);
            $("#edit_link_shopee1").val(link);
            $("#preview_gambar1").attr("src", gambar);

            // Set action URL pada form edit
            $("#formEditProduct").attr("action", "/product/update/" + id);

            $("#modal-edit-product").modal("show");
        });

        $(document).on("click", ".btnEditCourse", function () {
            let id = $(this).data("id");
            let nama = $(this).data("nama");
            let kursus = $(this).data("kursus");
            let berlangganan = $(this).data("berlangganan");
            let link = $(this).data("link");

            $("#edit_id").val(id);
            $("#edit_nama_materi").val(nama);
            $("#edit_kategori_kursus").val(kursus);
            $("#edit_kategori_berlangganan").val(berlangganan);
            $("#edit_link_materi").val(link);

            // Set action URL pada form edit
            $("#formEditCourse").attr("action", "/course/update/" + id);

            $("#modal-edit-course").modal("show");
        });

        document.addEventListener('DOMContentLoaded', function() {
            $(".delete-confirm").click(function(e) {
                var form = $(this).closest('form');
                e.preventDefault();

                Swal.fire({
                    title: '<span style="color:#f00">Apakah Anda Yakin?</span>',
                    html: "<strong>Data ini akan dihapus secara permanen!</strong><br>Anda tidak akan bisa mengembalikan data setelah penghapusan.",
                    icon: 'warning',
                    iconColor: '#ff6b6b',
                    showCancelButton: true,
                    background: '#f7f7f7',
                    backdrop: `
                        rgba(0, 0, 0, 0.4)
                        url('https://cdn.pixabay.com/photo/2016/11/18/15/07/red-alert-1837455_960_720.png')
                        left top
                        no-repeat
                    `,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batalkan',
                    customClass: {
                        popup: 'animated zoomIn faster',
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger',
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire({
                            title: 'Info!',
                            text: 'Data berhasil dihapus.',
                            icon: 'success',
                            background: '#f7f7f7',
                            customClass: {
                                popup: 'animated bounceIn faster',
                            },
                            showConfirmButton: false,
                            timer: 1500,
                        });
                    }
                });
            });
        });

        $(document).ready(function() {
            $("#btnTambahProduct").click(function() {
                $('#modal-inputproduct').modal('show');
            });
        });

        $(document).ready(function() {
            $("#btnTambahCourse").click(function() {
                $('#modal-inputcourse').modal('show');
            });
        });

        $(document).ready(function() {
    });

    document.getElementById('subscribeButton').addEventListener('click', function(event) {
        event.preventDefault();
        var modal = new bootstrap.Modal(document.getElementById('subscriptionModal'));
        modal.show();
    });

    function subscribe(type) {
        alert('Anda memilih paket ' + type);
    }
    </script>
@endpush