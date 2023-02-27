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
                                    <h4><a href="#">{{ $gor->nama_gor }}</a></h4>
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
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text"><button type="submit">Send Message</button></div>
                        </form>

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
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section><!-- End Clients Section -->
    </main><!-- End #main -->
@endsection
