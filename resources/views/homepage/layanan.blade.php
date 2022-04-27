@section('title', 'Garda Mitra Nasional')

@extends('layouts.homepage.template')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6"
                style="color:#BB1D33; padding-top: 200px; text-align: left; font-family: Poppins; font-weight: 700;font-size: 35px; width: 394px">
                <div class="row" style="background: rgba(187, 29, 51, 0.03); border-radius: 0px 75px;">Konsultasi
                    Keamanan
                    <p style="font-size:14px;font-weight: 400; color:#350106">Membentuk sistem keamanan bagi mitra
                        kerja yang baru berdiri ataupun sudah berjalan, berdasarkan kepada pengintegrasian sumber daya
                        manusia
                    </p>
                </div>
            </div>

            <div class="col-12 col-lg-6" style="padding-top: 150px">
                <center>
                    <img src="{{ asset('assets/images/layanan.png') }}"
                        style="width: width: 320px;height: 387px;left: 797px;top: 160px;">
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 150px;">

        <div class="cardla">
            <div class="card-body"><img src="{{ asset('assets/images/Vector.png') }}">
                Penyedia Tenaga Kerja Keamanan Swasta (Satpam)
            </div>
        </div><br>
        <div class="cardla">
            <div class="card-body"><img src="{{ asset('assets/images/fluent_window-dev-tools-24-regular.png') }}">
                Penyedia Peralatan Keamanan (Security Devices)
            </div>
        </div><br>
        <div class="cardla">
            <div class="card-body"><img src="{{ asset('assets/images/healthicons_i-training-class-outline.png') }}">
                Pendidikan dan Pelatihan Keamanan (Security Education and Training)
            </div>
        </div><br>
        <div class="cardla">
            <div class="card-body"><img src="{{ asset('assets/images/user-activity.png') }}">
                Konsultasi Keamanan (Security Consultant)
            </div>
        </div><br>
        <div class="cardla">
            <div class="card-body"><img src="{{ asset('assets/images/security-services.png') }}">
                Sistem Keamanan (Security System)
            </div>
        </div>

    </div>


@endsection
