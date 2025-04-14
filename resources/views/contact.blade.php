@extends('layouts.tabler')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Navbar & Hero Start -->
    <div class="container-fluid py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated zoomIn">Contact</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h1 class="mb-3 fw-bold">Get In Touch With Us</h1>
                    <div class="d-inline-block border-bottom border-primary pb-2 mb-4"></div>
                    <p class="lead">Have questions or want to work with us? Contact our team using the form below or through our contact details.</p>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="bg-light rounded shadow-sm p-4 p-sm-5 h-100">
                        <div class="mb-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="bi bi-geo-alt-fill fs-5"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="fw-bold text-primary mb-1">Office Address</h6>
                                    <p class="mb-0 text-muted small">
                                        Jl. Sukabirus, Gg. Raden Saleh, No.32,<br>
                                        Desa Citeureup, Kec. Dayeuhkolot,<br>
                                        Kab. Bandung, Jawa Barat
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="bi bi-telephone-fill fs-5"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="fw-bold text-primary mb-1">Call Us</h6>
                                    <p class="mb-0 text-muted small">0813-5656-5025</p>
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-shrink-0 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                    <i class="bi bi-envelope-fill fs-5"></i>
                                </div>
                                <div class="ms-3">
                                    <h6 class="fw-bold text-primary mb-1">Email Us</h6>
                                    <p class="mb-0 text-muted small">solvethinks@gmail.com</p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <h6 class="fw-bold text-primary mb-3">Follow Us</h6>
                            <div class="d-flex gap-2">
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-circle">
                                    <i class="bi bi-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="bg-white rounded p-4 p-sm-5 shadow-sm h-100">
                        <h4 class="fw-bold text-primary mb-4">Send Us A Message</h4>
                        <form action="#" method="POST">
                            @csrf
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name"><i class="fa fa-user me-2 text-primary"></i>Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email"><i class="fa fa-envelope me-2 text-primary"></i>Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                        <label for="subject"><i class="fa fa-book me-2 text-primary"></i>Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 180px" required></textarea>
                                        <label for="message"><i class="fa fa-comment me-2 text-primary"></i>Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 px-5 fw-bold" type="submit">
                                        <i class="fa fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Map Start -->
    <div class="container-xxl py-5 bg-light">
        <div class="container px-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="mb-3 fw-bold">Find Us On Map</h2>
                    <div class="d-inline-block border-bottom border-primary pb-2 mb-4"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm border-0 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="ratio ratio-16x9">
                                <!-- Updated to use Bandung location instead of New York -->
                                <iframe class="rounded-0" style="border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5785678772093!2d107.63064931477015!3d-6.937232394983286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9cf42587903%3A0x59be24d68ef809b1!2sJl.%20Sukabirus%2C%20Citeureup%2C%20Kec.%20Dayeuhkolot%2C%20Kabupaten%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sen!2sid!4v1624512345678!5m2!1sen!2sid" width="600" height="450" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Map End -->
@endsection