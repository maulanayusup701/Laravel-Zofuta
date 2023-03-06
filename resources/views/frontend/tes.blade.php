@extends('auth.layouts.main')
@section('container')
    <section id="features" class="features mt-5">
        <div class="container aos-init aos-animate mt-5" data-aos="fade-up">
            <div class="row">
                <div class="image col-lg-6 aos-init aos-animate"
                    style="background-image: url({{ 'https://asset.kompas.com/crops/zKMGMw-HE1NSjYHRToFOyVGJTVw=/0x0:0x0/750x500/data/photo/2017/01/17/1101216IMG-20170117-090011-1484625674140p.jpg' }});"
                    data-aos="fade-right"></div>
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-left" data-aos-delay="100">
                    <div class="icon-box mt-5 mt-lg-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150"> <i
                            class="bx bx-store"></i>
                        <h4>Nama Gor</h4>
                        <p>{{ $gor->nama_gor }}</p>
                    </div>
                    <div class="icon-box mt-5 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150"> <i
                            class="bx bx-map-pin"></i>
                        <h4>Alamat Gor</h4>
                        <p>{{ $gor->alamat_gor }}</p>
                    </div>
                    <div class="icon-box mt-5 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="150"> <i
                            class="bx bxs-drink"></i>
                        <h4>Fasilitas</h4>
                        <p>-</p>
                    </div>
                </div>
                <hr class="mt-4">
            </div>
        </div>
    </section>
@endsection
