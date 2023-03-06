@extends('auth.layouts.main')
@section('container')
    <section id="features" class="features mt-5">
        <div class="container aos-init aos-animate mt-5" data-aos="fade-up">
            <div class="row">
                <div class="image col-lg-4 aos-init aos-animate"
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
            <div class="row d-blox">
                <div class="col">
                    <nav class="align-center">
                        <div class="nav nav-tabs " id="nav-tab" role="tablist">
                            {{-- looping headnav --}}
                            @foreach ($gor->field as $field)
                                <button class="nav-link align-center" id="nav-{{ $field->slug_lapangan }}-tab"
                                    data-bs-toggle="tab" data-bs-target="#nav-{{ $field->slug_lapangan }}" type="button"
                                    role="tab" aria-controls="nav-{{ $field->slug_lapangan }}"
                                    aria-selected="true"><b>{{ $field->nama_lapangan }}</b>
                                </button>
                            @endforeach
                        </div>
                    </nav>
                    {{-- loopping lapang --}}
                    @foreach ($gor->field as $field)
                        {{-- looping jadwal --}}
                        <div class="d-blox">
                            <div class="tab-content mt-3" id="nav-tabContent">
                                <div class="tab-pane fade" id="nav-{{ $field->slug_lapangan }}" role="tabpanel"
                                    aria-labelledby="nav-{{ $field->slug_lapangan }}-tab" tabindex="0">
                                    @foreach ($field->schedule as $a)
                                        {{ $a->status }}
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </section>
@endsection
