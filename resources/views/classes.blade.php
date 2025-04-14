@extends('layouts.tabler')

@section('content')
<div class="container-fluid py-5 bg-primary hero-header mb-5">
    <div class="container-fluid my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-12 text-center">
                <h1 class="text-white animated zoomIn">Class</h1>
                <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Class</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Class Start -->
<div class="container py-5">
    <div class="section-title position-relative text-center mb-4 mb-md-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
        <h2 class="mt-2">Classes We Offer</h2>
    </div>

    @if(auth()->check() && auth()->user()->role === 'admin')
    <div class="d-flex justify-content-end mb-3 mb-md-4 wow fadeInUp" data-wow-delay="0.1s">
        <a href="#" class="btn btn-primary shadow-sm" data-bs-toggle="modal" data-bs-target="#addClassModal">
            <i class="fas fa-plus"></i>
        </a>
    </div>
    @endif

    <div class="category-section mb-4 mb-md-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="row g-3 g-md-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card border-0 shadow-sm bg-white h-100 position-relative">
                    @if(auth()->check() && auth()->user()->role === 'admin')
                    <div class="position-absolute top-0 end-0 m-2 d-flex z-3">
                        <button class="btn btn-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editClassModal1">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm delete-confirm">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                    @endif
                    <img src="{{ asset('img/ui_ux-designer.jpg') }}" class="card-img-top img-fluid" alt="Class" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-3 p-md-4 d-flex flex-column">
                        <h5 class="card-title text-center mb-3">UI/UX Design Fundamentals</h5>
                        <p class="text-center text-primary fw-bold mb-3">Rp 1.500.000</p>
                        <div class="text-center mt-auto">
                            <a href="#" class="btn btn-sm btn-outline-dark rounded-pill px-4">View Details →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Design Class Card 2 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="card border-0 shadow-sm bg-white h-100 position-relative">
                    @if(auth()->check() && auth()->user()->role === 'admin')
                    <div class="position-absolute top-0 end-0 m-2 d-flex z-3">
                        <button class="btn btn-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editClassModal2">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm delete-confirm">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                    @endif
                    <img src="{{ asset('img/portfolio-6.jpg') }}" class="card-img-top img-fluid" alt="Class" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-3 p-md-4 d-flex flex-column">
                        <h5 class="card-title text-center mb-3">Advanced Graphic Design</h5>
                        <p class="text-center text-primary fw-bold mb-3">Rp 1.800.000</p>
                        <div class="text-center mt-auto">
                            <a href="#" class="btn btn-sm btn-outline-dark rounded-pill px-4">View Details →</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Design Class Card 3 -->
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="card border-0 shadow-sm bg-white h-100 position-relative">
                    @if(auth()->check() && auth()->user()->role === 'admin')
                    <div class="position-absolute top-0 end-0 m-2 d-flex z-3">
                        <button class="btn btn-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#editClassModal3">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm delete-confirm">
                            <i class="fa fa-trash"></i>
                        </button>
                    </div>
                    @endif
                    <img src="{{ asset('img/portfolio-5.jpg') }}" class="card-img-top img-fluid" alt="Class" style="height: 180px; object-fit: cover;">
                    <div class="card-body p-3 p-md-4 d-flex flex-column">
                        <h5 class="card-title text-center mb-3">Responsive Web Design</h5>
                        <p class="text-center text-primary fw-bold mb-3">Rp 1.650.000</p>
                        <div class="text-center mt-auto">
                            <a href="#" class="btn btn-sm btn-outline-dark rounded-pill px-4">View Details →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Class Modal -->
<div class="modal fade" id="addClassModal" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Tambah Class</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
    </div>
    <div class="modal-body">
        <form action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="class_name" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" id="class_name" name="class_name" 
                            placeholder="Nama Kelas">
                    </div>
                    <div class="mb-3">
                        <label for="class_price" class="form-label">Harga Kelas</label>
                        <input type="text" class="form-control" id="class_price" name="class_price" 
                            placeholder="Harga Kelas">
                    </div>
                    <div class="mb-3">
                        <label for="class_link" class="form-label">Link Pendaftaran</label>
                        <input type="text" class="form-control" id="class_link" name="class_link" 
                            placeholder="Link Pendaftaran">
                    </div>
                    <div class="mb-3">
                        <label for="class_image" class="form-label">Upload Gambar</label>
                        <input type="file" class="form-control" id="class_image" name="class_image" accept="image/*">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group d-flex justify-content-center">
                                <button type="Submit" class="btn btn-primary flex-grow-1">Simpan</button>
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


<!-- Edit Class Modals -->
@for ($i = 1; $i <= 3; $i++)
<div class="modal fade" id="editClassModal{{$i}}" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Edit Class</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form id="formEditClass{{$i}}" action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" id="edit_class_id{{$i}}" name="id">
            <div class="mb-3">
                <label for="edit_class_name{{$i}}" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" id="edit_class_name{{$i}}" name="class_name">
            </div>
            <div class="mb-3">
                <label for="edit_class_price{{$i}}" class="form-label">Harga Kelas</label>
                <input type="text" class="form-control" id="edit_class_price{{$i}}" name="class_price">
            </div>
            <div class="mb-3">
                <label for="edit_class_link{{$i}}" class="form-label">Link Pendaftaran</label>
                <input type="text" class="form-control" id="edit_class_link{{$i}}" name="class_link">
            </div>
            <div class="mb-3">
                <label for="edit_class_image{{$i}}" class="form-label">Upload Gambar</label>
                <input type="file" class="form-control" id="edit_class_image{{$i}}" name="class_image" accept="image/*">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success flex-grow-1">Update</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>

@endfor
@endsection