@extends('layouts.tabler')

@section('content')

<div class="container-fluid py-5 bg-primary hero-header mb-5">
    <div class="container-fluid my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Berita</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Berita</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="fw-bold text-center mb-3">Berita Terkini</h2>
            <p class="text-center text-muted">Tetap terinformasi tentang aktivitas, acara, dan pengumuman terbaru kami.</p>
            <hr class="mx-auto" style="width: 90px; height: 3px; background-color: #dc3545;">
        </div>
    </div>
    <div class="row">
        <!-- Main Content Column -->
        <div class="col-lg-8">
            <!-- News Grid -->
            <div class="row row-cols-1 row-cols-md-2 g-4 mb-4">
                <!-- News Item 1 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('img/portfolio-6.jpg') }}" class="card-img-top w-100 object-fit-cover" alt="News Image" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h6 class="fw-bold">Menelusuri Jejak Tradisi Nusantara</h6>
                            <p class="text-muted small">Warisan budaya adalah cermin jati diri bangsa yang tak lekang oleh waktu, mencerminkan kekayaan nilai, sejarah, dan kearifan lokal dari berbagai daerah di Indonesia.</p>
                            <a href="#" class="btn btn-outline-danger rounded-pill px-4">Baca <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 2 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('img/portfolio-6.jpg') }}" class="card-img-top w-100 object-fit-cover" alt="News Image" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h6 class="fw-bold">Pelatihan Seni Tari Tradisional untuk Mahasiswa</h6>
                            <p class="text-muted small">Kegiatan pelatihan seni tari tradisional diadakan untuk memperkenalkan budaya lokal kepada mahasiswa baru dan mahasiswa asing.</p>
                            <a href="#" class="btn btn-outline-danger rounded-pill px-4">Baca <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 3 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('img/portfolio-6.jpg') }}" class="card-img-top w-100 object-fit-cover" alt="News Image" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h6 class="fw-bold">Workshop Bahasa Jawa untuk Penutur Asing</h6>
                            <p class="text-muted small">Kegiatan ini bertujuan melestarikan bahasa daerah dan memperkenalkan tata krama dalam budaya Jawa.</p>
                            <a href="#" class="btn btn-outline-danger rounded-pill px-4">Baca <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- News Item 4 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('img/logo2.png') }}" class="card-img-top w-100 object-fit-cover" alt="News Image" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="card-body">
                            <h6 class="fw-bold">Kunjungan Budaya ke Keraton Yogyakarta</h6>
                            <p class="text-muted small">Peserta diajak menjelajahi sejarah dan warisan budaya Keraton yang menjadi ikon Yogyakarta.</p>
                            <a href="#" class="btn btn-outline-danger rounded-pill px-4">Baca <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Sidebar Column -->
        <div class="col-lg-4">
            <!-- Recent Posts -->
            <div class="card mb-4 border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Post Terkini</h5>
                    <!-- Add your sidebar content here -->
                    <ul class="list-group list-group-flush">
                        <!-- Post 1 -->
                        <li class="list-group-item p-3">
                            <div class="row g-0">
                                <div class="col-4">
                                    <div style="height: 80px; width: 100px; overflow: hidden;">
                                        <img src="{{ asset('img/portfolio-6.jpg') }}" class="img-fluid rounded w-100 h-100 object-fit-cover" alt="Recent post">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="ps-3">
                                        <h6 class="mb-1"><a href="#" class="text-decoration-none text-dark">Menelusuri Jejak Tradisi Nusantara</a></h6>
                                        <small class="text-muted">April 12, 2025</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item p-3">
                            <div class="row g-0">
                                <div class="col-4">
                                    <div style="height: 80px; width: 100px; overflow: hidden;">
                                        <img src="{{ asset('img/portfolio-6.jpg') }}" class="img-fluid rounded w-100 h-100 object-fit-cover" alt="Recent post">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="ps-3">
                                        <h6 class="mb-1"><a href="#" class="text-decoration-none text-dark">Pelatihan Seni Tari Tradisional untuk Mahasiswa</a></h6>
                                        <small class="text-muted">April 12, 2025</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item p-3">
                            <div class="row g-0">
                                <div class="col-4">
                                    <div style="height: 80px; width: 100px; overflow: hidden;">
                                        <img src="{{ asset('img/portfolio-6.jpg') }}" class="img-fluid rounded w-100 h-100 object-fit-cover" alt="Recent post">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="ps-3">
                                        <h6 class="mb-1"><a href="#" class="text-decoration-none text-dark">Workshop Bahasa Jawa untuk Penutur Asing</a></h6>
                                        <small class="text-muted">April 12, 2025</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item p-3">
                            <div class="row g-0">
                                <div class="col-4">
                                    <div style="height: 80px; width: 100px; overflow: hidden;">
                                        <img src="{{ asset('img/portfolio-6.jpg') }}" class="img-fluid rounded w-100 h-100 object-fit-cover" alt="Recent post">
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="ps-3">
                                        <h6 class="mb-1"><a href="#" class="text-decoration-none text-dark">Kunjungan Budaya ke Keraton Yogyakarta</a></h6>
                                        <small class="text-muted">April 12, 2025</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
