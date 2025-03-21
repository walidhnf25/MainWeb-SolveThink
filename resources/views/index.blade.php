@extends('layouts.tabler')
@section('content')
    <div class="container-fluid bg-white p-0">
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <div class="container-fluid py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Solve Think</h1>
                            <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem.</p>
                            <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Berlangganan</a>
                            <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h6 class="position-relative text-primary ps-4">About Us</h6>
                            <h2 class="mt-2">The best .... solution dengan pengalaman terbaik.</h2>
                        </div>
                        <p class="mb-4">Tempor erat elitr rebum at clita...</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Berpengalaman</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional</h6>
                            </div>
                            <div class="col-sm-6">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Lengkap</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Harga Terjangkau</h6>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.jpg">
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Our Course</h6>
                <h2 class="mt-2">Course Terbaru</h2>
            </div>

            @if(auth()->user() && auth()->user()->role === 'admin')
            <div class="d-flex justify-content-end mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <button id="open-modal" class="btn btn-success rounded-pill" data-bs-toggle="modal" data-bs-target="#addModal">
                    <strong>+</strong> Add Course
                </button>
            </div>
            @endif
            @php
                $colors = [
                    'linear-gradient(135deg, #FF9A8B, #FF6A88)',
                    'linear-gradient(135deg, #56CCF2, #2F80ED)',
                    'linear-gradient(135deg, #6A11CB, #2575FC)',
                    'linear-gradient(135deg, #F7971E, #FFD200)',
                    'linear-gradient(135deg, #00C9FF, #92FE9D)',
                    'linear-gradient(135deg, #FF512F, #DD2476)',
                ];
            @endphp
            @foreach ($categories as $ctg)
            <div class="category-section mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h2 class="mt-1">{{ $ctg->category_name }}</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <div class="col card-item">
                        @php
                            $randomColor = $colors[array_rand($colors)];
                        @endphp
                        <div class="card text-white shadow-lg border-0 h-100" style="background: {{ $randomColor }};">
                            <div class="card-body d-flex flex-column align-items-center justify-content-center text-center" style="min-height: 180px;">
                                <h4 class="card-title fw-bold">{{ $ctg->category_detail }}</h4>
                                <p class="mb-2">{{ $ctg->category_title }} | <strong>{{ $ctg->category_subscription }}</strong></p>
                                <a href="#" class="btn btn-outline-light rounded-pill mt-3">View more →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>

            <!-- Add New Materi -->
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addModalLabel">Tambah Materi Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="addCardForm" action="{{ route('category.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="namedetail" class="form-label">Name Detail</label>
                                    <input type="text" class="form-control" id="materiName" required name="category_detail">
                                </div>
                                <div class="mb-3">
                                    <label for="materiName" class="form-label">Nama Materi</label>
                                    <input type="text" class="form-control" id="materiName" required name="category_name">
                                </div>
                                <div class="mb-3">
                                    <label for="materiCategory" class="form-label">Kategori Materi</label>
                                    <input type="text" class="form-control" id="materiCategory" required name="category_title">
                                </div>
                                <div class="mb-3">
                                    <label for="materiSubscription" class="form-label">Jenis Berlangganan</label>
                                    <select class="form-select" id="materiSubscription" name="category_subscription">
                                        <option value="Gratis">Gratis</option>
                                        <option value="Premium">Premium</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!-- About End -->

        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Marketplace</h6>
                    <h2 class="mt-2">Apa yang Anda Butuhkan?</h2>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 text-end">
                        @if(auth()->check() && auth()->user()->role === 'admin')
                            <a href="#" class="btn btn-primary" id="btnTambahMarketplace">
                                <i class="fa fa-plus"></i>
                            </a>
                        @endif
                    </div>
                </div>
                <div class="row g-3">
                    @foreach($marketplace as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                            <div class="card border-0 shadow rounded position-relative" style="max-width: 250px; margin: auto;">
                                @if(auth()->check() && auth()->user()->role === 'admin')
                                    <div class="position-absolute top-0 end-0 m-2 d-flex">
                                        <a href="#" class="btn btn-success btn-sm me-1 btnEditMarketplace" data-id="{{ $item->id }}" data-nama="{{ $item->nama_barang }}" data-harga="{{ $item->harga_barang }}" data-link="{{ $item->link_shopee }}" data-gambar="{{ asset($item->gambar) }}"><i class="fa fa-edit"></i>
                                        </a>
                                        <form action="{{ route('marketplace.destroy', $item->id) }}" method="POST" class="d-inline delete-form">
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
                        @if(count($marketplace) > 3)
                            <a href="{{ route('marketplace.index') }}" class="btn btn-primary">
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
                    <h2 class="mt-2">Produk yang Baru Diluncurkan</h2>
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
                        <ul class="list-inline mb-5" id="portfolio-flters">
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

        <!-- Testimonial Start -->
        <div class="container-fluid bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded text-white p-4">
                        <i class="fa fa-quote-left fa-2x mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h6 class="text-white mb-1">Client Name</h6>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
                    <h2 class="mt-2">Meet Our Team Members</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="img/team-1.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Jhon Doe</h5>
                                <small>CEO</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="img/team-2.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Emma William</h5>
                                <small>Manager</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="d-flex">
                                <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square text-primary bg-white my-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                                <img class="img-fluid rounded w-100" src="img/team-3.jpg" alt="">
                            </div>
                            <div class="px-4 py-3">
                                <h5 class="fw-bold m-0">Noah Michael</h5>
                                <small>Designer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <div class="modal fade" id="modal-inputmarketplace" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Marketplace</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('marketplace.store') }}" method="post" enctype="multipart/form-data">
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

        <div class="modal fade" id="modal-edit-marketplace" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Marketplace</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formEditMarketplace" action="" method="post" enctype="multipart/form-data">
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
@endsection

@push('myscript')
    <script>
        $(document).ready(function() {
            // Menampilkan modal untuk menambah tipe pekerjaan
            $("#btnTambahMarketplace").click(function() {
                $('#modal-inputmarketplace').modal('show');
            });
        });

        $(document).on("click", ".btnEditMarketplace", function () {
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
            $("#formEditMarketplace").attr("action", "/marketplace/update/" + id);

            $("#modal-edit-marketplace").modal("show");
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
    });
    </script>
@endpush