@extends('layouts.tabler')
@section('content')
            <div class="container-fluid py-5 bg-primary hero-header mb-5">
                <div class="container-fluid my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Electronic Components</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                                    <li class="breadcrumb-item text-white active" aria-current="page">Component Electronics</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Electronic Component</h6>
                    <h2 class="mt-2">Apa yang Anda Butuhkan?</h2>
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
                            <div class="card border-0 shadow rounded position-relative text-center" style="max-width: 250px; margin: auto;">
                                @if(auth()->check() && auth()->user()->role === 'admin')
                                    <div class="position-absolute top-0 end-0 m-2 d-flex">
                                        <a href="#" class="btn btn-success btn-sm me-1 btnEditComponent"
                                            data-id="{{ $item->id }}"
                                            data-nama="{{ $item->nama_barang }}"
                                            data-harga="{{ $item->harga_barang }}"
                                            data-link="{{ $item->link_shopee }}"
                                            data-gambar="{{ asset($item->gambar) }}">
                                            <i class="fa fa-edit"></i>
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
                                    <div class="p-2">
                                        <h6 class="card-title">{{ $item->nama_barang }}</h6>
                                        <p class="card-text" style="font-size: 14px;">Rp. {{ number_format($item->harga_barang, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Service End -->

        <div class="modal fade" id="modal-inputcomponent" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Electronic Components</h5>
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
                        <h5 class="modal-title">Edit Electronic Components</h5>
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
@endsection

@push('myscript')
    <script>
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
    </script>
@endpush