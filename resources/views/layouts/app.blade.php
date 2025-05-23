<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Department of Rural Road Development')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Bootstrap + Custom CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-secondary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-warning px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center" >
        <div class="col-lg-5 text-center text-lg-start mb-lg-0">
            <div class="d-flex" >
                <a href="#" class="text-muted me-4"> <i class="fas fa-envelope text-secondary me-2"></i>it_drrd@gov.mm</a>

                <a href="#" class="text-muted me-0"><i class="fas fa-phone-alt text-secondary me-2"></i>06722258</a>
    
            </div>
        </div>
       
        <!-- <div class="col-lg-3 row-cols-1 text-center mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px; width:45px">
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal text-secondary"></i></a>
                <a class="btn btn-sm btn-outline-light btn-square rounded-circle" href=""><i class="fab fa-youtube fw-normal text-secondary"></i></a>
            </div>
        </div> -->
    </div>
</div>


<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid nav-bar p-0">
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ url('/') }}" class="navbar-brand p-0">
            <h1 class="display-5 m-0"><img src="{{ asset('img/brand-logo.png') }}" class="img-fluid" alt=""> DRRD</h1><p><marquee behavior="scroll" direction="left" style="color:white">
    Department of Rural Road Development
  </marquee></p>
        </a>
   
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">မူလ</a>
                <a href="{{ url('/form') }}" class="nav-item nav-link {{ Request::is('form') ? 'active' : '' }}">ဆောင်းပါးများ</a>
                <a href="{{ url('/service') }}" class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}">ကြေငြာချက်များ</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">သတင်းများ</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('/feature') }}" class="dropdown-item">ဦးစီးဌာနသတင်းများ</a>
                        <a href="{{ url('/countries') }}" class="dropdown-item">ရုပ်သံသတင်းများ</a>
                        <a href="{{ url('/testimonial') }}" class="dropdown-item">တင်ဒါများ</a>
                        <a href="{{ url('/training') }}" class="dropdown-item">သင်တန်းများ</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>


<!-- Navbar End -->

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<div class="footer wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-4">
        <div class="row" id="fullwidth">
            <div class="col-md-4">
                <div class="footer-item d-flex flex-column p-5">
                    <h4 class="text-secondary mb-4">Contact Info</h4>
                    <a href="https://www.google.com/maps?q=19.805372,96.126572">
                        <i class="fa fa-map-marker-alt me-2"></i> Naypyidaw, Myanmar
                    </a>
                    <a href="#"><i class="fas fa-envelope me-2"></i> drrd.gov.mm</a>
                    <a href="#"><i class="fas fa-phone me-2"></i> 06722258</a>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-secondary me-2"></i>
                        <a class="btn mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn mx-1" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn mx-1" href="#"><i class="fab fa-instagram"></i></a>
                        <a class="btn mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="footer-item p-4">
                    <iframe src="https://www.google.com/maps?q=19.805372,96.126572&hl=en&z=19&output=embed"
                        width="100%" height="350" style="border:0;" allowfullscreen loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Copyright -->
<div class="container-fluid copyright py-4">
    <div class="container" id="full">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-white"><a href="#" class="border-bottom text-white">© Department of Rural Road Development</a>, All rights reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end text-white">
                Designed & Distributed By <a class="border-bottom text-white">IT DRRD</a>
            </div>
        </div>
    </div>
</div>

<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
