<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PANDAWACOFFEE</title>
    {{-- <meta content="" name="description">
    <meta content="" name="keywords"> --}}

    <!-- Favicons -->
    <link href="assets/img/logo-coffee.png" rel="icon">
    <link href="assets/img/logo-coffee.png" rel="pandawacoffee">
    {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="/">PANDAWA<span style="color: #dfb78c">COFFEE</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> --}}

            @yield('navbar')
            <!-- .navbar -->

        </div>
    </header><!-- End Header -->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    @foreach ($profiles as $profile)
                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h3>{{ $profile->name }}</h3>
                            <p>
                                {{ $profile->address }} <br><br>
                                <strong>Phone:</strong> {{ $profile->phone }}<br>
                                <strong>Email:</strong> {{ $profile->email }}<br>
                            </p>
                        </div>

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.8206523680624!2d112.69954431477552!3d-7.3739886946790625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e368c744ed81%3A0x6d0f898d61bebb5e!2sDusun%20Ketapang%2C%20Suko%2C%20Sukodono%2C%20Sidoarjo%20Regency%2C%20East%20Java%2061258!5e0!3m2!1sen!2sid!4v1647963588206!5m2!1sen!2sid"
                                width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#product">Product</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#team">Our team</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Social Media</h4>
                            <ul>
                                <li><a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                    {{ $profile->facebook }}</li>
                                <li><a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                    {{ $profile->instagram }}</li>
                                <li><a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                    {{ $profile->linkedin }}</li>
                            </ul>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="me-md-auto text-center">
                <div class="copyright">
                    &copy; Copyright <strong><span>PandawaCoffee</span></strong> 2020
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
