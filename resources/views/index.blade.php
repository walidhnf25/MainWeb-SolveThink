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
                                        <button class="btn btn-free btn-primary px-4 py-2 rounded-pill w-100" 
                                            @if(Auth::check() && (Auth::user()->tgl_berlangganan == null || Auth::user()->tgl_berlangganan == '0000-00-00')) 
                                                onclick="berlangganan()"
                                            @else 
                                                disabled
                                            @endif>
                                            Free Trial
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card text-start shadow-sm border-0" style="width: 18rem; border-radius: 12px;">
                                <div class="card-header bg-secondary text-white rounded-top text-center">
                                    Premium
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Rp. 5.000/bulan</h5>
                                    <p class="card-text text-muted mb-4">Akses seluruh materi dalam E-Learning untuk pengguna premium</p>
                                    <div class="text-center mb-3">
                                        <button class="btn btn-premium btn-secondary px-4 py-2 rounded-pill w-100" disabled>Daftar</button>
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
                            <div class="col-sm-12">
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Bimbingan Belajar</h6>
                                <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Materi Pembelajaran</h6>
                                <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Komponen Elektronika</h6>
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
            <div class="alert alert-success alert-dismissible fade" id="successAlert" role="alert" style="display: none;">
                <strong>Berhasil!</strong> Materi pembelajaran berhasil ditambahkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div id="customAlert" class="custom-alert" style="display: none;" role="dialog" aria-modal="true" aria-labelledby="alertTitle">
                <div class="custom-alert-content">
                    <div class="alert-icon">
                        <div class="checkmark">&#10004;</div>
                    </div>
                    <div class="alert-message">
                        <h4 id="alertTitle">Sukses!</h4>
                        <p id="alertMessage">Data berhasil disimpan.</p>
                    </div>
                    <div class="alert-actions">
                        <button type="button" class="btn-confirm" onclick="closeAlert()">OK</button>
                    </div>
                </div>
            </div>

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
                    <h2 class="mt-1">ML AI Data Science</h2>
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
                                            <a href="https://wa.me/6281356565025" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                                    <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
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
        <!-- <div class="container-xxl py-5">
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
                                    <a href="https://wa.me/6281356565025" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48">
                                            <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
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
        </div> -->
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
                                                <button type="button" class="btn btn-primary flex-grow-1" onclick="handleComponentSubmit(this)">Simpan</button>
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
                                                <button type="button" class="btn btn-primary flex-grow-1" onclick="handleProductSubmit(this)">Simpan</button>
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

    // Fungsi untuk menangani pembaruan tanggal langganan
    function subscribe() {
        // Hitung tanggal satu bulan ke depan dari tanggal hari ini
        var today = new Date();
        var nextMonth = new Date(today.setMonth(today.getMonth() + 1));

        // Format tanggal sebagai YYYY-MM-DD
        var nextMonthFormatted = nextMonth.toISOString().split('T')[0];

        // Kirim tanggal langganan ke server
        updateSubscriptionDate(nextMonthFormatted);
    }

    // Fungsi untuk mengirim tanggal langganan ke server
    function updateSubscriptionDate(tglSubscription) {
        fetch('/update-subscription', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')  // Pastikan token CSRF ditambahkan
            },
            body: JSON.stringify({
                tgl_berlangganan: tglSubscription
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Menampilkan alert sukses menggunakan SweetAlert2
                Swal.fire({
                    title: 'Info!',
                    text: 'Berlangganan berhasil dibuat.',
                    icon: 'success',
                    background: '#f7f7f7',
                    customClass: {
                        popup: 'animated bounceIn faster', // Menambahkan animasi pada popup
                    },
                    showConfirmButton: false,
                    timer: 1500,  // Popup akan menutup otomatis setelah 1500ms
                });

                // Menutup modal setelah alert ditampilkan
                var modalElement = document.getElementById('subscriptionModal');
                var modal = bootstrap.Modal.getInstance(modalElement);
                modal.hide();
            } else {
                // Menampilkan alert error menggunakan SweetAlert2
                Swal.fire({
                    title: 'Error!',
                    text: 'Terjadi kesalahan, silakan coba lagi nanti.',
                    icon: 'error',
                    background: '#f7f7f7',
                    customClass: {
                        popup: 'animated bounceIn faster', // Menambahkan animasi pada popup
                    },
                    showConfirmButton: false,
                    timer: 1500,  // Popup akan menutup otomatis setelah 1500ms
                });
            }
        })
        .catch(error => console.error('Error:', error));
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Assuming you have a function that handles course creation
        // After the course is successfully created, show the alert:

        function showSuccessAlert() {
            const alert = document.getElementById('successAlert');
            alert.style.display = 'block';
            alert.classList.add('show');

            // Auto hide after 5 seconds
            setTimeout(function() {
                alert.classList.remove('show');
                setTimeout(function() {
                    alert.style.display = 'none';
                }, 150);
            }, 5000);
        }
    }
)

function showAlert(message = "Data berhasil disimpan.") {
    const alertElement = document.getElementById('customAlert');
    const messageElement = document.getElementById('alertMessage');

    if (alertElement && messageElement) {
        messageElement.textContent = message;
        alertElement.style.display = 'flex';

        // Trigger reflow for animation to work properly
        alertElement.offsetWidth;

        // Add show class to start animations
        alertElement.classList.add('show');

        console.log('Alert displayed:', message);
    } else {
        console.error('Alert elements not found');
    }
}

function closeAlert() {
    const alertElement = document.getElementById('customAlert');
    if (alertElement) {
        // Remove show class first to trigger animations
        alertElement.classList.remove('show');

        // Wait for animations to complete before hiding
        setTimeout(() => {
            alertElement.style.display = 'none';
        }, 300); // Match with CSS transition time
    }
}

// Handle course form submissions
document.addEventListener('DOMContentLoaded', function() {
    // Target both add and edit forms
    const addCourseForm = document.getElementById('formTambahCourse');
    const editCourseForm = document.getElementById('formEditCourse');

    // Function to intercept form submissions
    const interceptSubmit = function(e) {
        e.preventDefault();

        // Get the form
        const form = e.target;

        // Show the alert
        showAlert("Materi pembelajaran berhasil disimpan");

        // Submit the form after a delay
        setTimeout(function() {
            form.submit();
        }, 2000);
    };

    // Add event listeners to both forms
    if (addCourseForm) {
        addCourseForm.addEventListener('submit', interceptSubmit);
        console.log('Add course form handler attached');
    }

    if (editCourseForm) {
        editCourseForm.addEventListener('submit', interceptSubmit);
        console.log('Edit course form handler attached');
    }

    // Also attach to any form with course-related classes
    const possibleForms = document.querySelectorAll('form.course-form, form[action*="course"]');
    possibleForms.forEach(form => {
        form.addEventListener('submit', interceptSubmit);
        console.log('Handler attached to form:', form);
    });
});

function handleComponentSubmit(button) {
    // Get the form
    const form = button.closest('form');
    if (!form) {
        console.error('Form not found');
        return;
    }

    // Basic validation
    const namaBarang = form.querySelector('#nama_barang').value;
    const hargaBarang = form.querySelector('#harga_barang').value;

    if (!namaBarang || !hargaBarang) {
        alert('Nama barang dan harga harus diisi.');
        return;
    }

    // Show the custom alert
    showComponentAlert("Component berhasil disimpan");

    // Submit the form after a delay
    setTimeout(() => {
        form.submit();
    }, 2000);
}

// Function to show component alert
function showComponentAlert(message) {
    // Check if alert element already exists
    let alertElement = document.getElementById('componentAlert');

    // If it doesn't exist, create it
    if (!alertElement) {
        alertElement = document.createElement('div');
        alertElement.id = 'componentAlert';
        alertElement.className = 'custom-alert';
        alertElement.setAttribute('role', 'dialog');
        alertElement.setAttribute('aria-modal', 'true');

        alertElement.innerHTML = `
            <div class="custom-alert-content">
                <div class="alert-icon">
                    <div class="checkmark">&#10004;</div>
                </div>
                <div class="alert-message">
                    <h4>Sukses!</h4>
                    <p id="componentAlertMessage">${message}</p>
                </div>
                <div class="alert-actions">
                    <button type="button" class="btn-confirm" onclick="closeComponentAlert()">OK</button>
                </div>
            </div>
        `;

        document.body.appendChild(alertElement);
    } else {
        // Update message if alert exists
        document.getElementById('componentAlertMessage').textContent = message;
    }

    // Close the modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('modal-inputcomponent'));
    if (modal) {
        modal.hide();
    }

    // Show the alert with animation
    alertElement.style.display = 'flex';

    // Force reflow for animation to work
    void alertElement.offsetWidth;

    // Add show class for animation
    alertElement.classList.add('show');
}

// Function to close component alert
function closeComponentAlert() {
    const alertElement = document.getElementById('componentAlert');
    if (alertElement) {
        // Remove show class first to trigger animation
        alertElement.classList.remove('show');

        // Hide after animation completes
        setTimeout(() => {
            alertElement.style.display = 'none';
        }, 300);
    }
}

function handleProductSubmit(button) {
    // Get the form
    const form = button.closest('form');
    if (!form) {
        console.error('Product form not found');
        return;
    }

    // Basic validation
    const namaProduk = form.querySelector('#nama_produk').value;
    const hargaProduk = form.querySelector('#harga_produk').value;

    if (!namaProduk || !hargaProduk) {
        alert('Nama produk dan harga harus diisi.');
        return;
    }

    // Show the custom alert
    showProductAlert("Produk berhasil disimpan");

    // Submit the form after a delay
    setTimeout(() => {
        form.submit();
    }, 2000);
}

// Function to show product alert
function showProductAlert(message) {
    // Check if alert element already exists
    let alertElement = document.getElementById('productAlert');

    // If it doesn't exist, create it
    if (!alertElement) {
        alertElement = document.createElement('div');
        alertElement.id = 'productAlert';
        alertElement.className = 'custom-alert';
        alertElement.setAttribute('role', 'dialog');
        alertElement.setAttribute('aria-modal', 'true');

        alertElement.innerHTML = `
            <div class="custom-alert-content">
                <div class="alert-icon">
                    <div class="checkmark">&#10004;</div>
                </div>
                <div class="alert-message">
                    <h4>Sukses!</h4>
                    <p id="productAlertMessage">${message}</p>
                </div>
                <div class="alert-actions">
                    <button type="button" class="btn-confirm" onclick="closeProductAlert()">OK</button>
                </div>
            </div>
        `;

        document.body.appendChild(alertElement);
    } else {
        // Update message if alert exists
        document.getElementById('productAlertMessage').textContent = message;
    }

    // Close the modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('modal-inputproduct'));
    if (modal) {
        modal.hide();
    }

    // Show the alert with animation
    alertElement.style.display = 'flex';

    // Force reflow for animation to work
    void alertElement.offsetWidth;

    // Add show class for animation
    alertElement.classList.add('show');
}

// Function to close product alert
function closeProductAlert() {
    const alertElement = document.getElementById('productAlert');
    if (alertElement) {
        // Remove show class first to trigger animation
        alertElement.classList.remove('show');

        // Hide after animation completes
        setTimeout(() => {
            alertElement.style.display = 'none';
        }, 300);
    }
}
    // Menambahkan event listener untuk tombol "Free Trial"
    document.querySelectorAll('.btn-free').forEach(button => {
        button.addEventListener('click', () => {
            subscribe();
        });
    });

    // Menambahkan event listener untuk tombol "Daftar"
    document.querySelectorAll('.btn-premium').forEach(button => {
        button.addEventListener('click', () => {
            // Tambahkan fungsi yang sesuai jika diperlukan
        });
    });
    </script>
@endpush