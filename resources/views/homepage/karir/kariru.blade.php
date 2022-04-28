@section('title', 'Garda Mitra Nasional')

@extends('layouts.homepage.template')

@section('content')

    <style>
        .page-item {
            margin: 0;
        }

    </style>

    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-lg-6" style="padding-top: 150px">
                <img src="{{ asset('assets/images/karir.png') }}"
                    style="width: 436px;height: 424px;left: 155px;top: 164px;">
            </div>

            <div class="col-12 col-lg-6"
                style="color:#BB1D33; padding-top: 200px; text-align: left; font-family: Poppins;font-weight: 700; font-size: 35px; width: 500px">
                <img src="{{ asset('assets/images/red.png') }}" style="width: 53px;height: 29px;left: 694px;top: 255px;">
                <p>Lowongan Kerja</p>
                <p
                    style="font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 16px;line-height: 24px;color: #350106;">
                    GMN berkomitmen untuk mengembangkan budaya perusahaan yang mendorong peningkatan produktivitas dan
                    kinerja sesuai visi misi perusahaan,
                    <br>Kami selalu Mencari dan mengembagkan bakat yang memiliki integritas, penuh energi dan memenuhi
                    kompetensi yang di perlukan<br>
                    bergabunglah Menjadi bagian dari kami
                </p>
                <p style="color:#BB1D33;font-size: 20px">
                    *Tidak dipungut biaya apapun
                </p>
            </div>
        </div>

        @if ($karirs->count())

            {{-- Karir View --}}

            @foreach ($karirs as $karir)
                <div class="card mb-3" style="width: 100%; height: 110px; top: 60px; background: transparent">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $karir->image) }}" class="img-fluid d-inline mt-1" alt="P" width="70" height="60" style="margin-left: 29px">
                        </div>
                        <div class="col-md-8">

                            <div class="card-body" style="margin-left: -250px; margin-top: 8px;">
                                <h5 class="card-title">{{ $karir->lowongan }}</h5>
                                <p class="card-text">{{ $karir->posisi }}</p>

                                <button type="submit" class="btn btn-secondary border-0 d-inline"
                                    style="margin-left: 600px; margin-top: -65px">Lihat Detail</button>

                                <button type="submit" class="btn-red btn-danger border-0 d-inline" data-bs-target="#tambah"
                                    data-bs-toggle="modal"
                                    style="margin-left: 762px; margin-top: -65px; background-color: #BB1D33">Kirim
                                    CV</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container mt-5  py-5 d-flex justify-content-center">
                {{ $karirs->links() }}
            </div>

            {{-- Karir View --}}
        @else
            <div class="card mb-5 text-center" style="width: 100%; height: 110px; top: 60px; background: transparent">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/samples/error-404.png') }}" class="img-fluid d-inline" alt="P"
                            width="150" height="150" style="border-radius: 18px; margin-left: 29px">
                    </div>
                    <div class="col-md-8">

                        <div class="card-body" style="margin-left: -300px; margin-top: 24px;">
                            <h5 class="card-title">Oopss, Mohon Maaf Untuk Saat Ini Karir Belum Tersedia</h5>
                        </div>

                    </div>
                </div>
            </div>

        @endif

    </div>

    @include('homepage.karir._form_pelamar')

    @include('sweetalert::alert')

@endsection
