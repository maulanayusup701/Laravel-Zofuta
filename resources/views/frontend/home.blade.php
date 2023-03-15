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
        <section id="gor" class="gor pb-0">
            <div class="container" data-aos="fade-up">
                <div class="row mb-4">
                    <div class="col-md-8"></div>
                    <div class="col-md-4 ml-auto">
                        <form class="d-flex" method="get" action="/search">
                            <input class="form-control me-2" type="search" name="search" placeholder="Search"
                                aria-label="Search" required>
                            <button class="btn btn-outline-success" type="submit" href="">Search</button>
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
                <div class="row">
                    <div class="col-lg-8">
                        <div class="section-title p-0">
                            <h2>Contact</h2>
                            <p>Contact Us</p>
                            <div class="alert alert-success alert-dismissible fade show d-none" role="alert"
                                id="success">
                                <strong>Send Message Successfully!</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <div class="alert alert-danger alert-dismissible fade show d-none" role="alert"
                                id="failed">
                                <strong>Send Message Failed!</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-8 mt-lg-0">
                        <form action="/contact" method="post" class="php-email-form" id="form-contact">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder="Your Name" required>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="Your Email" required>
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                    name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject"
                                    required>
                                @error('subject')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <input id="message" type="hidden" name="message" value="{{ old('message') }}" required>
                                <trix-editor input="message" value="{{ old('message') }}" placeholder="message">
                                </trix-editor>
                                @error('message')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" id="submit">
                                <span class="spinner-border spinner-border-sm d-none" id="loading" role="status"
                                    aria-hidden="true"></span>
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->
        @include('frontend.partials.Sponsor')
    </main><!-- End #main -->
    <script>
        $(document).ready(function() {
            $('#form-contact').submit(function(event) {
                // Menghentikan function default
                event.preventDefault();
                // submit "disable"
                $('#submit').attr('disabled', true);
                // menampilkan animasi loading
                $('#loading').removeClass('d-none');
                // mengambil data di form
                var form_data = $(this).serialize();
                // kirim AJAX request
                $.ajax({
                    type: 'POST',
                    url: '/contact', // route "web"
                    data: form_data,
                    success: function(response) {
                        // tampilkan success response di console
                        console.log(response);
                        // submit "enable"
                        $('#submit').attr('disabled', false);
                        // menyembunyikan animasi loading
                        $('#loading').addClass('d-none');
                        // tampilkan notifikasi ke html
                        $('#success').removeClass('d-none')
                        // reset form
                        $('#form-contact')[0].reset();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle error response
                        console.log(errorThrown);
                        // submit "enable"
                        $('#submit').attr('disabled', false);
                        // menyembunyikan animasi loading
                        $('#loading').addClass('d-none');
                        // tampilkan notifikasi ke html
                        $('#success').removeClass('d-none')
                    }
                });
            });
        });
    </script>
@endsection
