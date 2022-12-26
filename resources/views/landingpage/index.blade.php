@extends('layouts.landing-page')

@section('navbar')
    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto active" href="#home">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About Us</a></li>
            <li><a class="nav-link scrollto" href="#product">Our Product</a></li>
            <li><a class="nav-link scrollto" href="#team">Our Team</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <div id="home">
        <section id="hero">
            <div class="hero-container">
                @foreach ($headers as $header)
                    <h3>{{ $header->title }}
                        @foreach ($profiles as $profile)
                            <strong>{{ $profile->name }}</strong>
                        @endforeach
                    </h3>
                    <div class="col-md-8">
                        <h1>{{ $header->subtitle }}</h1>
                    </div>
                @endforeach
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
        </section><!-- End Hero -->
    </div>


    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title-title">
                    <h2>About</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title-about-body">
                            <h3>Learn More <span>About Us</span></h3>
                            @foreach ($profiles as $profile)
                                <p>{{ $profile->description }}</p>
                            @endforeach
                            <div class="row content">
                                <div class="col-lg-6 pt-4 pt-lg-0">
                                    <a href="/about-us" class="btn-learn-more">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-img d-flex justify-content-center">
                            <img src="assets/img/shipping-container.jpg" alt="shipping">
                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End About Section -->

        <!-- ======= Product Section ======= -->
        <section id="cta" class="cta">
            <div class="container">
                <section id="product" class="services">
                    {{-- <div class="container"> --}}

                    <div class="section-title-title">
                        <h2>Product</h2>
                    </div>

                    <div class="section-title">
                        {{-- <h2 style="color: #fff">Product</h2> --}}
                        <h3>What are the advantages of our <span style="color: #dfb78c">Coffee</span> ?</h3>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-stretch mb-5 mb-lg-0 justify-content-center">
                            @foreach ($products as $product)
                                <div class="icon-box">
                                    <div class="icon"><i class="{{ $product->icon }}"></i></div>
                                    <h4 class="title"><a href="">{{ $product->superiority }}</a></h4>
                                    <p class="description">{{ $product->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    {{-- </div> --}}
                </section><!-- End Services Section -->
            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title-title">
                    <h2>Team</h2>
                </div>
                <div class="section-title">
                    {{-- <h2>Team</h2> --}}
                    <h3>Our Hardworking <span>Team</span></h3>
                </div>

                <div class="row">

                    <div class="col-md-12 d-flex align-items-stretch justify-content-center">
                        @foreach ($teams as $team)
                            <div class="member">
                                <div class="member-img">
                                    <img src="storage/{{ $team->image }}" class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $team->name }}</h4>
                                    <span>{{ $team->job }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title-title">
                    <h2>Contact</h2>
                </div>
                <div class="section-title">
                    {{-- <h2>Contact</h2> --}}
                    <h3>Contact <span>Us</span></h3>
                    <p>Interested in our products? Contact us now</p>
                    @foreach ($profiles as $profile)
                        <a href="https://wa.me/{{ $profile->phone }}" class="btn-get-started scrollto">Our WhatsApp</a>
                    @endforeach
                </div>

                <div class="row mt-3">

                    <div class="col-lg-4">
                        <div class="info">
                            @foreach ($profiles as $profile)
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>{{ $profile->address }}</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>{{ $profile->email }}</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>{{ $profile->phone }}</p>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
