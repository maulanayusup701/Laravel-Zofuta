@extends('auth.layouts.main')
@section('container')
    @auth
        <div class="container mt-5">
            <div class="main-body mt-5">
                <div class="row mt-5">
                    <div class="col-md-4 mb-5">
                        <div class="card mt-5">
                            <div class="card-body my-4">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                        class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4>{{ auth()->user()->fullname }}</h4>
                                        <p class="text-secondary mb-1">{{ auth()->user()->username }}</p>
                                        <p class="text-muted font-size-sm">{{ auth()->user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-5">
                        <div class="card mb-3 mt-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ auth()->user()->fullname }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Username</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ auth()->user()->username }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ auth()->user()->email }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ auth()->user()->notelp }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ auth()->user()->alamat }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary ">Edit Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row mb-5">
                    <div class="col mb-5">
                        @if (count($order) == 0)
                            <table class="table table-striped mb-5">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Gor</th>
                                        <th scope="col">Lapangan</th>
                                        <th scope="col">Jam mulai</th>
                                        <th scope="col">Jam selesai</th>
                                        <th scope="col">Durasi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Upload struk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="10" class="text-center">
                                            <span class="fw-bold">
                                                Belum ada Transaksi
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @else
                            <table class="table table-striped mb-5">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Gor</th>
                                        <th scope="col">Lapangan</th>
                                        <th scope="col">Jam mulai</th>
                                        <th scope="col">Jam selesai</th>
                                        <th scope="col">Durasi</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Upload struk</th>
                                    </tr>
                                </thead>
                                @foreach ($order as $order)
                                    <tbody>
                                        <tr>
                                            <th scope="row">{{ $loop->first }}</th>
                                            <td>{{ $order->tanggal_main }}</td>
                                            <td>{{ $order->user->fullname }}</td>
                                            <td>King Putsal</td>
                                            <td>{{ $order->field->nama_lapangan }}</td>
                                            <td>{{ $order->jam_mulai }}</td>
                                            <td>{{ $order->jam_selesai }}</td>
                                            <td>{{ $order->durasi }} Jam</td>
                                            <td><span class="badge text-bg-warning text-white">{{ $order->status }} </span>
                                            </td>
                                            <td>

                                                <input type="file" class="form-control form-control-sm"
                                                    id="inputGroupFile01">

                                            </td>
                                        </tr>
                                    </tbody>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
