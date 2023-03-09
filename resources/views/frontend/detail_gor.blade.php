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

    <section id="team" class="team ">
        <div class="container rounded aos-init aos-animate" data-aos="fade-up">
            <div class=" section-title text-center">
                <p>Form Booking</p>
            </div>
            {{-- <div class="row mt-2"> --}}
            <form class="needs-validation col-12" novalidate="">
                <div class="row g-3">
                    <div class="col-lg-12">
                        <label for="country" class="form-label">Pilih Lapangan</label>
                        <select class="form-select" id="country" required="">
                            <option value="">--Pilih Lapangan--</option>
                            @foreach ($gor->field as $field)
                                <option value="{{ $field->nama_lapangan }}">{{ $field->nama_lapangan }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="country" class="form-label">Pilih Tanggal Main</label>
                        <div class="input-group date" id="datepicker">
                            <input type="text" class="form-control" placeholder="--Pilih Tanggal Main--">
                            <span class="input-group-append">
                            </span>
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="country" class="form-label">Jam Mulai</label>
                        <select class="form-select" id="country" required="">
                            <option value="">--Pilih Jam Mulai--</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                            <option value="22:00">22:00</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="state" class="form-label">Jam Selesai</label>
                        <select class="form-select" id="state" required="">
                            <option value="">--Pilih Jam Selesai--</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                            <option value="22:00">22:00</option>
                            <option value="23:00">23:00</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="form-check">
                    <span class="text-success">Harga</span>
                    <h4 class="mb-3">Rp.0 Ribu</h4>
                </div>
                <hr class="my-4">
                <button class="w-100 btn btn-success btn-lg" type="submit" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">Checkout</button>
            </form>
        </div>
        </div>
    </section>
@endsection
