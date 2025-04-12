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

    <!-- About Us Section -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="position-relative overflow-hidden rounded-4 shadow">
                        <!-- The image container -->
                        <div class="ratio ratio-4x3">
                            <img class="object-fit-cover" src="{{ asset('img/about.jpg') }}" alt="About SolveThink">
                        </div>
                        <!-- Caption with Bootstrap opacity classes -->
                        <div class="position-absolute start-0 bottom-0 w-100 p-3 bg-primary bg-opacity-75">
                            <h3 class="text-white fw-bold mb-0">Innovation Since 2025</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative mb-4">
                        <h6 class="position-relative text-primary ps-4">Who We Are</h6>
                        <h2 class="mt-2 fw-bold">Pioneering Technological Solutions for Tomorrow's Challenges</h2>
                    </div>
                    <p class="mb-4">SolveThink was founded with a simple yet ambitious goal: to make technology accessible, understandable, and beneficial for everyone. Starting as a small team of passionate engineers, we've grown into a dynamic company offering innovative solutions across multiple domains.</p>

                    <div class="row g-4 mb-5">
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center p-4 rounded shadow-sm bg-white h-100 feature-card">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-4" style="width: 60px; height: 60px;">
                                    <i class="fa fa-graduation-cap fa-lg text-white"></i>
                                </div>
                                <h5 class="mb-0">Educational Resources</h5>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center p-4 rounded shadow-sm bg-white h-100 feature-card">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-4" style="width: 60px; height: 60px;">
                                    <i class="fa fa-microchip fa-lg text-white"></i>
                                </div>
                                <h5 class="mb-0">Electronic Components</h5>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center p-4 rounded shadow-sm bg-white h-100 feature-card">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-4" style="width: 60px; height: 60px;">
                                    <i class="fa fa-code fa-lg text-white"></i>
                                </div>
                                <h5 class="mb-0">Software Products</h5>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="d-flex align-items-center p-4 rounded shadow-sm bg-white h-100 feature-card">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-4" style="width: 60px; height: 60px;">
                                    <i class="fa fa-laptop fa-lg text-white"></i>
                                </div>
                                <h5 class="mb-0">Hardware Products</h5>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center mt-5">
                        <a class="btn btn-primary rounded-pill px-4 py-3 me-4" href="#services">Our Services</a>
                        <a class="text-primary fw-medium ms-2" href="#stats">
                            <span class="me-2"><i class="fa fa-arrow-right"></i></span> Company Stats
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Stats Counter -->
    <div id="stats" class="container-fluid py-5 bg-light">
        <div class="container py-4">
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <div class="mb-4 d-flex justify-content-center">
                            <div class="bg-primary rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 90px; height: 90px;">
                                <i class="fas fa-check-circle fs-1 text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h2 class="display-4 fw-bold text-primary mb-0 counter">1000</h2>
                            <div class="border-top border-primary mx-auto my-2" style="width: 40px;"></div>
                            <p class="fw-bold text-dark mt-2">Projects Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <div class="mb-4 d-flex justify-content-center">
                            <div class="bg-primary rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 90px; height: 90px;">
                                <i class="fas fa-users fs-1 text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h2 class="display-4 fw-bold text-primary mb-0 counter">5000</h2>
                            <div class="border-top border-primary mx-auto my-2" style="width: 40px;"></div>
                            <p class="fw-bold text-dark mt-2">Happy Clients</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <div class="mb-4 d-flex justify-content-center">
                            <div class="bg-primary rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 90px; height: 90px;">
                                <i class="fas fa-calendar-check fs-1 text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h2 class="display-4 fw-bold text-primary mb-0 counter">5000</h2>
                            <div class="border-top border-primary mx-auto my-2" style="width: 40px;"></div>
                            <p class="fw-bold text-dark mt-2">Years Experience</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 shadow-sm h-100 p-4 text-center">
                        <div class="mb-4 d-flex justify-content-center">
                            <div class="bg-primary rounded-circle p-3 d-flex align-items-center justify-content-center" style="width: 90px; height: 90px;">
                                <i class="fas fa-trophy fs-1 text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h2 class="display-4 fw-bold text-primary mb-0 counter">2500</h2>
                            <div class="border-top border-primary mx-auto my-2" style="width: 40px;"></div>
                            <p class="fw-bold text-dark mt-2">Awards Won</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Stats End -->

    <!-- Modal Subscription -->
    <div class="modal fade" id="subscriptionModal" tabindex="-1" aria-labelledby="subscriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-primary text-white border-0 py-3">
                    <h5 class="modal-title w-100 text-center fs-4" id="subscriptionModalLabel">
                        <i class="bi bi-stars me-2"></i> Pilih Paket Berlangganan
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm" style="border-radius: 10px;">
                                <div class="card-header bg-primary text-white text-center py-3 border-0">
                                    <h4 class="m-0">Free Trial</h4>
                                    <span class="position-absolute top-0 end-0 translate-middle badge bg-danger">
                                        Popular
                                    </span>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="text-center mb-4">
                                        <h2 class="display-6 fw-bold mb-0">Rp 0</h2>
                                        <p class="text-muted">per bulan</p>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Akses materi dasar</li>
                                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> 1 project template</li>
                                        <li class="mb-2"><i class="fas fa-check text-primary me-2"></i> Community support</li>
                                        <li class="text-muted mb-2"><i class="fas fa-times me-2"></i> Premium modules</li>
                                        <li class="text-muted mb-2"><i class="fas fa-times me-2"></i> Priority support</li>
                                    </ul>
                                    <div class="text-center mt-auto">
                                        <button class="btn btn-primary px-4 py-2 rounded-pill w-100" onclick="subscribe('free')">
                                            Mulai Free Trial
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card h-100 border-0 shadow-sm" style="border-radius: 10px;">
                                <div class="card-header bg-success text-white text-center py-3 border-0">
                                    <h4 class="m-0">Premium</h4>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <div class="text-center mb-4">
                                        <h2 class="display-6 fw-bold mb-0">Rp 5.000</h2>
                                        <p class="text-muted">per bulan</p>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Akses semua materi</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Unlimited projects</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Community support</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Premium modules</li>
                                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Priority support</li>
                                    </ul>
                                    <div class="text-center mt-auto">
                                        <button class="btn btn-success px-4 py-2 rounded-pill w-100" onclick="subscribe('premium')">
                                            Berlangganan Sekarang
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vision & Mission -->
    <div class="container-xxl py-5 bg-light">
        <div class="container px-lg-5">
            <div class="text-center mb-5">
                <h6 class="text-primary fw-bold mb-2">Our Purpose</h6>
                <h2 class="fw-bold">Vision & Mission</h2>
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary rounded-circle p-3 text-white d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                                <i class="fas fa-lightbulb fa-2x"></i>
                            </div>
                            <h3 class="ms-3 mb-0">Our Vision</h3>
                        </div>
                        <h4 class="text-primary mt-3">Transforming Ideas into Reality</h4>
                        <p class="mb-4">We envision a future where technology is accessible to everyone and simplifies everyday life. At SolveThink, we're committed to creating innovative solutions that bridge the gap between complex problems and elegant solutions.</p>
                        <p class="mb-0">Our cutting-edge research in AI, machine learning, and IoT is aimed at developing products that not only solve current challenges but also anticipate future needs.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card h-100 border-0 shadow-sm p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary rounded-circle p-3 text-white d-flex align-items-center justify-content-center" style="width: 70px; height: 70px;">
                                <i class="fas fa-rocket fa-2x"></i>
                            </div>
                            <h3 class="ms-3 mb-0">Our Mission</h3>
                        </div>
                        <h4 class="text-primary mt-3">Empowering Through Technology</h4>
                        <p class="mb-4">Our mission is to provide high-quality educational resources, components, and products that help individuals and businesses harness the power of technology. We believe in:</p>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Delivering exceptional quality in all our products</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Creating comprehensive learning materials for students of all levels</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Supporting innovation through accessible electronic components</li>
                            <li class="mb-2"><i class="fa fa-check-circle text-primary me-2"></i> Building sustainable technological solutions for the future</li>
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
                <h6 class="text-primary fw-bold mb-2">Our Team</h6>
                <h2 class="fw-bold">Meet The People Behind SolveThink</h2>
            </div>
            <div class="row g-4 g-md-4 justify-content-center">
                <!-- Team Member 1 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card border-0 shadow-sm overflow-hidden h-100">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-1.jpg" alt="John Doe">
                            <div class="bg-primary bg-opacity-75 position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="opacity: 0; transition: opacity 0.3s;">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="fw-bold text-primary mb-1">John Doe</h5>
                            <p class="mb-0">CEO & Founder</p>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card border-0 shadow-sm overflow-hidden h-100">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-2.jpg" alt="Jane Smith">
                            <div class="bg-primary bg-opacity-75 position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="opacity: 0; transition: opacity 0.3s;">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="fw-bold text-primary mb-1">Jane Smith</h5>
                            <p class="mb-0">CTO</p>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card border-0 shadow-sm overflow-hidden h-100">
                        <div class="position-relative">
                            <img class="img-fluid w-100" src="img/team-3.jpg" alt="Michael Johnson">
                            <div class="bg-primary bg-opacity-75 position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="opacity: 0; transition: opacity 0.3s;">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="fw-bold text-primary mb-1">Michael Johnson</h5>
                            <p class="mb-0">Lead Developer</p>
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
                <h6 class="text-primary fw-bold mb-2">Testimonials</h6>
                <h2 class="fw-bold">What Our Clients Say</h2>
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