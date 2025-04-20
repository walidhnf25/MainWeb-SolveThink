@extends('layouts.tabler')

@section('content')
    <div class="container-fluid py-5 bg-primary hero-header mb-5">
        <div class="container-fluid my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Tentang</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Tentang</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- About Us Section -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <!-- Gambar -->
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="w-100">
                        <div class="ratio ratio-4x3 bg-white rounded-4 overflow-hidden shadow">
                            <img src="{{ asset('img/st_new_2.png') }}" alt="About SolveThink"
                                class="w-100 h-100" style="object-fit: contain; object-position: center;">
                        </div>
                        <div class="bg-primary bg-opacity-75 p-3 text-center rounded-bottom">
                            <h5 class="text-white fw-bold mb-0">Since 2024</h5>
                        </div>
                    </div>
                </div>

                <!-- Teks -->
                <div class="col-lg-6">
                    <div class="mb-4">
                        <h6 class="text-primary">Siapa Kami?</h6>
                        <h2 class="mt-2 fw-bold">SolveThink - Belajar bersama, berkarya bersama!</h2>
                        <p class="mt-3">SolveThink adalah startup yang bergerak di bidang edukasi dan teknologi. Kami hadir untuk membantu pelajar, mahasiswa, dan masyarakat umum dalam menguasai keterampilan masa depan melalui pendekatan belajar yang praktis, terarah, dan relevan di era digital.</p>
                    </div>

                    <!-- Fitur -->
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-4 rounded shadow-sm bg-white h-100">
                                <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-microchip text-white fa-lg"></i>
                                </div>
                                <h6 class="mb-0 fw-semibold">Materi Pembelajaran</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-4 rounded shadow-sm bg-white h-100">
                                <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-graduation-cap text-white fa-lg"></i>
                                </div>
                                <h6 class="mb-0 fw-semibold">Bimbingan Belajar</h6>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center p-4 rounded shadow-sm bg-white h-100">
                                <div class="flex-shrink-0 bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
                                    style="width: 60px; height: 60px;">
                                    <i class="fa fa-code text-white fa-lg"></i>
                                </div>
                                <h6 class="mb-0 fw-semibold">Komponen Elektronika</h6>
                            </div>
                        </div>
                    </div>
                </div> <!-- end teks -->
            </div>
        </div>
    </div>

    <!-- About Us End -->

    <!-- Vision & Mission -->
    <div class="container-xxl py-5 bg-light">
        <div class="container px-lg-5">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold mb-2">Tujuan Kami</h6>
                <h2 class="fw-bold">Visi & Misi</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary rounded-circle p-3 text-white d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                                <i class="fas fa-lightbulb fa-2x"></i>
                            </div>
                            <h3 class="ms-3 mb-0">Visi Kami</h3>
                        </div>
                        <p class="mb-0">SolveThink bertujuan untuk menjadi pusat pembelajaran dan inovasi teknologi yang dapat diakses oleh semua kalangan. Kami ingin menjembatani kesenjangan antara teori dan praktik, serta membantu setiap individu mengembangkan kemampuan yang relevan di era digital.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary rounded-circle p-3 text-white d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                                <i class="fas fa-rocket fa-2x"></i>
                            </div>
                            <h3 class="ms-3 mb-0">Misi Kami</h3>
                        </div>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Menyediakan bimbingan belajar yang interaktif dan aplikatif di bidang Software Development, ML AI Data Science, dan Internet of Things.</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Menciptakan komunitas belajar yang aktif, kolaboratif, dan berorientasi pada solusi.</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Menumbuhkan semangat inovasi di kalangan pelajar, mahasiswa, dan masyarakat umum.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Vision & Mission End -->

    <!-- Team Section -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold mb-2">Tim Kami</h6>
                <h2 class="fw-bold">Temui Orang-Orang Dibalik SolveThink</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Team Member 1 -->
                <div class="col-10 col-sm-6 col-lg-3 mx-auto">
                    <div class="card border-0 shadow-sm overflow-hidden h-100">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="John Doe">
                            <div class="bg-primary bg-opacity-75 position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="opacity: 0; transition: opacity 0.3s;">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-github"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="fw-bold text-primary mb-1">Walid Hanif Ataullah</h5>
                            <p class="mb-0">CEO & Founder</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-10 col-sm-6 col-lg-3 mx-auto">
                    <div class="card border-0 shadow-sm overflow-hidden h-100">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="Jane Smith">
                            <div class="bg-primary bg-opacity-75 position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="opacity: 0; transition: opacity 0.3s;">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-github"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="fw-bold text-primary mb-1">Misbahul Khoirurozikin</h5>
                            <p class="mb-0">CTO & Founder</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-10 col-sm-6 col-lg-3 mx-auto">
                    <div class="card border-0 shadow-sm overflow-hidden h-100">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="Michael Johnson">
                            <div class="bg-primary bg-opacity-75 position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="opacity: 0; transition: opacity 0.3s;">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-github"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="fw-bold text-primary mb-1">Shendy Setiawan</h5>
                            <p class="mb-0">CFO & Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Section -->
    <div class="container-xxl py-5 bg-light">
        <div class="container px-lg-5">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold mb-2">Testimoni</h6>
                <h2 class="fw-bold">Apa Kata Klien Kami</h2>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="card border-0 shadow-sm p-4">
                    <div class="mb-3 text-primary">
                        <i class="fa fa-quote-left fa-2x"></i>
                    </div>
                    <div class="mb-4">
                        <div class="mb-2">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p>SolveThink provided exceptional service and their IoT solutions have transformed our manufacturing process. The team's expertise and dedication to excellence made all the difference.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Robert Chen</h5>
                            <span class="text-primary">Manufacturing CEO</span>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow-sm p-4">
                    <div class="mb-3 text-primary">
                        <i class="fa fa-quote-left fa-2x"></i>
                    </div>
                    <div class="mb-4">
                        <div class="mb-2">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p>The educational materials from SolveThink helped our team quickly master new programming techniques. Their curriculum is well-structured and the practical examples are invaluable.</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Lisa Taylor</h5>
                            <span class="text-primary">IT Director</span>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow-sm p-4">
                    <div class="mb-3 text-primary">
                        <i class="fa fa-quote-left fa-2x"></i>
                    </div>
                    <div class="mb-4">
                        <div class="mb-2">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                        </div>
                        <p>Their components are reliable and customer service is excellent. Every time I needed support, they were quick to respond and resolve my issues. Will definitely order again!</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h5 class="mb-1">David Wilson</h5>
                            <span class="text-primary">Electronics Enthusiast</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
</div>
@endsection

@push('myscript')
<script>
    $(document).ready(function() {
        // Initialize subscription modal
        $("#subscribeButton").click(function() {
            $('#subscriptionModal').modal('show');
        });

        // Initialize testimonial carousel
        $(".testimonial-carousel").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            margin: 25,
            dots: true,
            loop: true,
            center: true,
            responsive: {
                0: { items: 1 },
                576: { items: 1 },
                768: { items: 2 },
                992: { items: 3 }
            }
        });

        // Team hover effects with jQuery
        $(".card .position-relative").hover(
            function() {
                $(this).find('.bg-primary').css('opacity', '1');
            },
            function() {
                $(this).find('.bg-primary').css('opacity', '0');
            }
        );

        // Smooth scroll for anchors
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();
            var target = $(this.hash);
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 70
                }, 800);
            }
        });
    });

    // Counter animation with IntersectionObserver
    document.addEventListener("DOMContentLoaded", function() {
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counters = document.querySelectorAll('.counter');
                    counters.forEach(counter => {
                        const updateCount = () => {
                            const target = +counter.innerText;
                            counter.innerText = '0';

                            let count = 0;
                            const interval = setInterval(() => {
                                count += Math.ceil(target / 30);
                                if (count >= target) {
                                    counter.innerText = target;
                                    clearInterval(interval);
                                } else {
                                    counter.innerText = count;
                                }
                            }, 50);
                        };
                        updateCount();
                    });
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });

        counterObserver.observe(document.querySelector('#stats'));
    });

    // Subscribe function
    function subscribe(plan) {
        alert('You selected the ' + plan + ' plan! Redirecting to checkout...');
    }

</script>
@endpush