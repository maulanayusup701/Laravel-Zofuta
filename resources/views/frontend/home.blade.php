@extends('frontend.layouts.main')
@section('container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>Zona Putsal Purwakarta<span>.</span></h1>
                    <h2>Tempat Booking Lapang Putsal di Purwakarta</h2>
                    <a href="#gor" class="btn btn-success mt-4">Explore<i class="bi bi-arrow-right-short"></i></a>
                </div>
            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- =======  Section ======= -->
        <section id="gor" class="gor">
            <div class="container" data-aos="fade-up">
                <div class="row mb-4">
                    <div class="col-md-8"></div>
                    <div class="col-md-4 ml-auto">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit" href="#">Search</button>
                            {{-- <div class="dropdown" style="margin-left: 20px;">
                                <a class=" btn btn-outline-success dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-funnel-fill"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Default</a></li>
                                    <li><a class="dropdown-item" href="#">Jarak Terdekat</a></li>
                                    <li><a class="dropdown-item" href="#">Harga termurah</a></li>
                                </ul>
                            </div> --}}
                        </form>
                    </div>
                </div>
                <div class="section-title">
                    <p>Daftar Gor</p>
                </div>
                <div class="row">
                    @foreach ($gors as $gor)
                        <div class="col-lg-4 col-md-6 d-blok align-items-stretch mb-4" data-aos="zoom-in"
                            data-aos-delay="100">
                            <div class="icon-box">
                                <img src="https://asset.kompas.com/crops/zKMGMw-HE1NSjYHRToFOyVGJTVw=/0x0:0x0/750x500/data/photo/2017/01/17/1101216IMG-20170117-090011-1484625674140p.jpg"
                                    alt="gor" class="img-fluid">
                                <div class="information mx-2 my-2">
                                    <h4><a href="/gor/{{ $gor->slug_gor }}">{{ $gor->nama_gor }}</a></h4>
                                    <p>{{ $gor->alamat_gor }}</p>
                                    <p>99KM </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {!! $gors->links() !!}
                    <div class="d-flex">
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <form action="/contact" method="post" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder="Your Name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="Your Email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    name="subject" id="subject" placeholder="Subject">
                                @error('subject')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5"
                                    placeholder="Message"></textarea>
                                @error('message')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-messapge">Your message has been sent. Thank you!</div>
                            </div>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End Contact Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">
                <div class="section-title">
                    <h2>Thank You for</h2>
                </div>
                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-1.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-2.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-3.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-4.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-5.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-6.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-7.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/client-8.png') }}"
                                class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Clients Section -->
    </main><!-- End #main -->
@endsection
