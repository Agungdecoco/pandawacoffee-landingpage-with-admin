@extends('layouts.landing-page')

@section('content')
    <section id="hero" style="height: 40vh;">
        <div class="hero-container">
            <div class="col-md-8">
                <h1>About Us</h1>
            </div>
        </div>
    </section><!-- End Hero -->
    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section-title-about-body">
                            <h3>Learn More <span>About Us</span></h3>
                            @foreach ($profiles as $profile)
                                <p>{{ $profile->description }}</p>
                            @endforeach
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
            <div class="container mb-5 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-img d-flex justify-content-center">
                            <img src="assets/img/coffee-bean.jpg" alt="coffee-bean">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-title-about-body">
                            <h3>Our <span style="color:#dfb78c">Product</span></h3>
                            @foreach ($profiles as $profile)
                                <p>
                                    {{ $profile->productdesc }}
                                <ul>
                                    @foreach ($products as $product)
                                        <li style="color: white"><span
                                                style="font-style: bolds;font-weight: 700; color: #dfb78c">{{ $product->superiority }},</span>
                                            {{ $product->description }}</li>
                                        {{-- <li style="color: white"><span
                                                style="font-style: bolds;font-weight: 700; color: #dfb78c">chjqsbahc,</span>
                                            Lorem
                                            ipsum dolor, sit amet consectetur adipisicing elit. Repellat ratione asperiores
                                            ipsa
                                            consequatur sint voluptas quos aliquid odio deserunt sunt!</li> --}}
                                    @endforeach
                                </ul>
                                </p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">
                <div class="section-title">
                    {{-- <h2>Team</h2> --}}
                    <h3>Our Hardworking <span>Team</span></h3>
                </div>

                <div class="row">

                    <div class="col-md-12 d-flex align-items-stretch justify-content-center">
                        {{-- <div class="col-md-3"> --}}
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
                        {{-- </div> --}}
                    </div>

                    {{-- <div class="col-md-3 d-flex align-items-stretch">
                </div> --}}
                </div>
            </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->
@endsection
