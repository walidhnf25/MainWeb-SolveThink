@extends('layouts.tabler')
@section('content')
        <div class="container-fluid py-5 bg-primary hero-header mb-5">
            <div class="container-fluid my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    <div class="col-12 text-center">
                        <h1 class="text-white animated zoomIn">Internet of Things</h1>
                        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Internet of Things</li>
                            </ol>
                        </nav>
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
        $("#btnTambahCourse").click(function() {
            $('#modal-inputcourse').modal('show');
        });
    });
    </script>
@endpush