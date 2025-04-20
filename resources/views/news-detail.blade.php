@extends('layouts.tabler')

@section('content')
    <!-- Hero Header -->
    <div class="container-fluid py-5 bg-primary hero-header mb-5">
        <div class="container-fluid my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">News Detail</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('news.index') }}">News</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Article</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Article Section -->
    <div class="container py-5">
        <div class="row">
            <<div class="col-lg-8 mx-auto">
                <!-- Article Card -->
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                    <img src="{{ asset('img/portfolio-6.jpg') }}" alt="SMAN 24 Bandung" class="card-img-top w-100" style="height: 400px; object-fit: cover;">

                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <span class="badge bg-danger px-3 py-2 rounded-pill">Education</span>
                                <span class="badge bg-primary px-3 py-2 rounded-pill ms-2">Community Service</span>
                            </div>
                            <div class="d-flex">
                                <span class="text-muted me-3"><i class="bi bi-clock"></i> 8 min read</span>
                            </div>
                        </div>

                        <!-- Title -->
                        <h2 class="fw-bold mb-3">Digitalisasi Pendidikan Lewat Pengabdian Masyarakat Telkom University</h2>

                        <!-- Author Info -->
                        <div class="d-flex align-items-center mb-4 pb-3 border-bottom">
                            <div class="ms-3">
                                <h6 class="mb-0 fw-bold">Yanto-toYan</h6>
                                <p class="text-muted mb-0"><small>Published on 10 January 2025</small></p>
                            </div>
                        </div>

                        <div class="content">
                            <div id="introduction">
                                <p>Bandung, 27 Desember 2024 – Telkom University kembali menunjukkan komitmennya terhadap pengembangan masyarakat melalui program pengabdian yang dilaksanakan di SMAN 24 Bandung. Program ini menjadi salah satu bentuk kontribusi nyata dunia akademik dalam meningkatkan kualitas pendidikan menengah, khususnya melalui pemanfaatan teknologi informasi.</p>
                                <p>Dengan melibatkan tim dosen dan mahasiswa dari Fakultas Informatika, kegiatan ini bertujuan untuk merancang dan mengimplementasikan sistem informasi sekolah yang mampu mendigitalisasi berbagai proses administrasi, manajemen data siswa, hingga transparansi informasi bagi orang tua.</p>
                            </div>

                            <div id="planning">
                                <h5 class="fw-bold mt-4 mb-3">Perencanaan dan Kebutuhan</h5>
                                <p>Sebelum memulai pengembangan, tim melakukan serangkaian diskusi dengan kepala sekolah, staf tata usaha, dan beberapa guru untuk memahami kebutuhan utama dari sistem yang akan dibangun. Hasil wawancara menunjukkan adanya kendala dalam pengelolaan data akademik dan absensi, serta keterbatasan sistem informasi yang ada sebelumnya.</p>
                                <p>Tim menyusun dokumen kebutuhan sistem (software requirement specification), melakukan observasi alur kerja sekolah, dan mengidentifikasi proses-proses yang dapat diotomatisasi. Fokus utama diarahkan pada efisiensi pengolahan nilai, sistem absensi elektronik, serta portal komunikasi antara sekolah dan orang tua siswa.</p>
                            </div>

                            <div id="development">
                                <h5 class="fw-bold mt-4 mb-3">Proses Pengembangan Sistem</h5>
                                <p>Tim pengembang menggunakan pendekatan Agile dengan metode Scrum untuk memastikan pengembangan berlangsung secara iteratif dan responsif terhadap feedback. Dalam tiap sprint dua mingguan, tim melibatkan perwakilan sekolah sebagai stakeholder untuk uji coba dan evaluasi fitur.</p>
                                <p>Beberapa fitur utama yang dikembangkan antara lain dashboard untuk admin sekolah, fitur input dan cetak nilai untuk guru, sistem presensi berbasis QR code untuk siswa, serta notifikasi otomatis melalui WhatsApp API bagi orang tua mengenai absensi dan nilai anak mereka.</p>

                                <div class="row mt-4 mb-4">
                                    <div class="col-md-6 mx-auto">
                                        <img src="{{ asset('img/portfolio-6.jpg') }}" alt="System Interface" class="img-fluid rounded">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <small class="text-muted">Tim pengembang sedang berdiskusi dengan pihak sekolah mengenai kebutuhan sistem</small>
                                    </div>
                                </div>
                            </div>

                            <div id="implementation">
                                <h5 class="fw-bold mt-4 mb-3">Implementasi dan Pelatihan</h5>
                                <p>Pada fase implementasi, sistem yang telah dikembangkan mulai diinstal di server sekolah. Tim memastikan sistem dapat diakses dengan baik, melakukan debugging langsung di lokasi, dan melakukan penyesuaian konfigurasi sesuai kebutuhan real-time di lapangan.</p>
                                <p>Tidak hanya berhenti pada implementasi, tim juga menyelenggarakan pelatihan intensif bagi guru dan staf tata usaha mengenai cara penggunaan sistem. Modul pelatihan disiapkan secara praktis, termasuk video tutorial, booklet digital, dan sesi tanya jawab interaktif.</p>
                                <p>Kegiatan pelatihan mendapat sambutan antusias, dengan banyak guru merasa bahwa sistem ini akan membantu meringankan beban administrasi mereka. Tim juga menyediakan dukungan teknis selama dua bulan setelah implementasi untuk memastikan transisi berjalan mulus.</p>
                            </div>

                            <div id="challenges">
                                <h5 class="fw-bold mt-4 mb-3">Tantangan dan Solusi</h5>
                                <p>Selama pelaksanaan proyek, tim menghadapi beberapa tantangan seperti keterbatasan infrastruktur jaringan internet di sekolah, kesenjangan literasi digital pada sebagian staf, serta waktu pelatihan yang terbatas karena harus disesuaikan dengan jadwal mengajar.</p>
                                <p>Untuk mengatasi kendala tersebut, tim melakukan instalasi jaringan lokal tambahan dan menyediakan dokumentasi offline untuk penggunaan sistem. Selain itu, pelatihan dipecah menjadi beberapa sesi kecil agar fleksibel dan lebih efektif.</p>
                            </div>

                            <div id="impact">
                                <h5 class="fw-bold mt-4 mb-3">Dampak dan Rencana Ke Depan</h5>
                                <p>Setelah sistem berjalan, sekolah mulai merasakan dampak positifnya. Data siswa lebih tertata, proses input nilai menjadi lebih cepat, dan komunikasi dengan orang tua menjadi lebih terbuka. Kepala sekolah menyatakan bahwa sistem ini akan menjadi pondasi awal menuju transformasi digital di lingkungan SMAN 24 Bandung.</p>
                                <p>Kedepannya, pihak sekolah dan Telkom University berencana untuk memperluas sistem dengan fitur tambahan seperti e-learning, ujian daring, dan integrasi dengan Dapodik. Selain itu, tim berharap proyek ini bisa direplikasi di sekolah-sekolah lain yang membutuhkan sistem informasi serupa.</p>
                                <p>Melalui kegiatan ini, Telkom University tak hanya memperkuat tri dharma perguruan tinggi, tetapi juga memperkuat nilai kolaborasi antara dunia akademik dan pendidikan menengah. Semangat gotong royong, inovasi, dan dedikasi menjadi pilar utama keberhasilan program ini.</p>
                            </div>
                        </div>
                        <div class="card bg-light mt-4">
                            <div class="card-body d-flex">
                                <div class="ms-3">
                                    <h5 class="fw-bold mb-1">About the Author</h5>
                                    <p class="mb-2">Yanto-toYan is a professor at Telkom University...</p>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle me-2"><i class="bi bi-linkedin"></i></a>
                                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle me-2"><i class="bi bi-twitter"></i></a>
                                        <a href="#" class="btn btn-sm btn-outline-dark rounded-circle"><i class="bi bi-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 pt-3 d-flex justify-content-between">
                            <a href="{{ route('news.index') }}" class="btn btn-outline-primary"><i class="bi bi-arrow-left me-2"></i>Back to News</a>
                            <div>
                                <a href="#" class="btn btn-outline-secondary me-2">Previous</a>
                                <a href="#" class="btn btn-outline-secondary">Next</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comments Section -->
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4">Comments (3)</h4>

                        <!-- Comment Form -->
                        <div class="mb-4">
                            <h6 class="fw-bold mb-3">Leave a comment</h6>
                            <form>
                                <div class="mb-3">
                                    <textarea class="form-control" rows="4" placeholder="Write your comment here..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Post Comment</button>
                            </form>
                        </div>

                        <!-- Comments List -->
                        <div class="comments-list">
                            <!-- Comment 1 -->
                            <div class="d-flex mb-4">
                                <img src="{{ asset('img/user.jpg') }}" alt="User" class="rounded-circle me-3" width="50" height="50">
                                <div>
                                    <h6 class="fw-bold mb-1">John Doe</h6>
                                    <p class="text-muted mb-2"><small>January 15, 2025 at 10:30 AM</small></p>
                                    <p>Ini adalah program yang sangat bermanfaat! Saya berharap lebih banyak sekolah bisa mendapatkan bantuan seperti ini.</p>
                                    <button class="btn btn-sm btn-link text-decoration-none p-0">Reply</button>
                                </div>
                            </div>

                            <!-- Comment 2 -->
                            <div class="d-flex ms-5 mb-4">
                                <img src="{{ asset('img/user.jpg') }}" alt="User" class="rounded-circle me-3" width="50" height="50">
                                <div>
                                    <h6 class="fw-bold mb-1">Admin</h6>
                                    <p class="text-muted mb-2"><small>January 15, 2025 at 11:45 AM</small></p>
                                    <p>Terima kasih atas komentar positifnya. Kami berencana untuk memperluas program ini ke sekolah-sekolah lain di masa depan.</p>
                                    <button class="btn btn-sm btn-link text-decoration-none p-0">Reply</button>
                                </div>
                            </div>

                            <!-- Comment 3 -->
                            <div class="d-flex mb-4">
                                <img src="{{ asset('img/user.jpg') }}" alt="User" class="rounded-circle me-3" width="50" height="50">
                                <div>
                                    <h6 class="fw-bold mb-1">Sarah Smith</h6>
                                    <p class="text-muted mb-2"><small>January 17, 2025 at 9:15 AM</small></p>
                                    <p>Apakah ada video dokumentasi dari proses pengembangan dan implementasi sistem? Saya tertarik untuk melihatnya.</p>
                                    <button class="btn btn-sm btn-link text-decoration-none p-0">Reply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
