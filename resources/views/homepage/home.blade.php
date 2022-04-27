@section('title', 'Garda Mitra Nasional')

@extends('layouts.homepage.template')

@section('content')
    <div style="background-image: url('assets/images/bghome-top.png'); width:100%;height:100%;">
        <div class="container">
            <div class="row">
                <div class="col-7 col-lg-7">
                    <div
                        style="color:#BB1D33; margin-top: 230px; text-align: left; font-family: Poppins; font-weight: 700; font-size: 35px;">
                        Garda Mitra Nasional
                        <p style="font-size:14px; font-weight: 400;padding-top: 35px;padding-bottom: 58px;color:#350106">
                            Badan Usaha Jasa Pengamanan (BUJP) dan didirikan pada 5 November 2010.
                            Memiliki personil pengamanan yang handal dan profesional Membangun hubungan dan komunikasi
                            yang harmonis serta memberi solusi bagi pengguna jasa Mengembangkan kerja sama.</p>
                    </div>

                    <!-- <a href="{{ route('login') }}" class="btn1 btn-danger">Lebih Detail ► </a>&emsp;&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-facebook"></i></a>&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-twitter"></i></a>&emsp;&emsp; -->
                    <!-- <a href="" class="social-icon"> <i class="fa fa-youtube"></i></a>&emsp; -->
                    <a href="{{ route('tentang') }}" class="btn-red btn-danger">Lebih Detail &emsp;<i
                            class="fa fa-arrow-circle-right"></i> </a>&emsp;&emsp;
                    <!-- <a href="#"><i class="fa fa-twitter-square" style="font-size:40px;"></i></a> -->
                    <!-- <a href="#"><i class="fa fa-facebook-square" style="font-size:40px;"></i></a>   -->
                    <a href="#"><i class="fa fa-linkedin-square" style="font-size:40px;"></i></a>
                    <a href="#"><i class="fa fa-youtube-play" style="font-size:40px;"></i></a>
                    <a href="#"><i class="fa fa-instagram" style="font-size:40px;"></i></a>

                </div>
                <div class="col-5 col-lg-5">
                    <img src="{{ asset('assets/images/home-top.png') }}" style="margin-top: 150px" class="responsive">
                </div>
            </div>
        </div>

        <div class="container" style="padding-top : 200px; padding-bottom: 100px">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="galery">
                        <div class="wrapper">
                            <img src="{{ asset('assets/galerry/1.png') }}">
                            <img src="{{ asset('assets/galerry/2.png') }}">
                            <img src="{{ asset('assets/galerry/2.jpg') }}">
                            <img src="{{ asset('assets/galerry/2.png') }}">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6"
                    style=" padding-top: 80px; text-align: left; font-family: Poppins; font-weight: 700;font-size: 35px; width: 394px">
                    Galerry Garda Mitra Nasional
                    <p style="font-size:14px;font-weight: 400;">Berikut merupakan dokumentasi dari kegiatan kami yang bisa
                        disaksikan melalui youtube kami.</p>
                    <a href="{{ route('blog') }}" class="btn-red btn-danger">Lebih Detail &emsp;<i
                            class="fa fa-arrow-circle-right"></i> </a>&emsp;&emsp;
                </div>
            </div>
        </div>
        <div class="container" style="padding-top : 150px;">
            <div class="col-12 col-lg-6">
                <p
                    style="font-family: 'Poppins';font-style: normal;font-weight: 700;font-size: 28px;line-height: 42px;color: #BB1D33;">
                    Terimakasih <br><span style="color: #350106;"> Atas Kepercayaan</span>
                <p>
            </div>
        </div>
        <div class="row" style="background: rgba(187, 29, 51, 0.08); height:auto">
            <div class="container">
                <div class="col-6 col-lg-6">
                    <p
                        style="padding-top: 38px;padding-bottom: 30px;font-family: 'Poppins';font-style: normal;font-weight: 400;font-size: 16px;line-height: 24px;color: #350106;">
                        Terima kasih telah mempercayai Garda Mitra Nasional
                        sebagai pengamanan di perusahaan anda, semoga
                        kita dapat terus menjalin kerja sama yang baik.
                    <p>
                </div>
                <div class="col-6 col-lg-6">
                    <!-- <div class="slider" style="width: 356px;height: 198px;left: 558px;top: -200px;">
                                            <div class="isi-slider">
                                            <img  src="{{ asset('assets/galerry/BCA.jpg') }}">
                                            <img src="{{ asset('assets/galerry/2.png') }}">
                                            <img src="{{ asset('assets/galerry/2.jpg') }}">
                                            <img src="{{ asset('assets/galerry/2.png') }}">
                                            </div> -->
                    <div class="contain1">
                        <div class="wrapper" style="width: 100%;height: 100%;">
                            <img src="{{ asset('assets/galerry/BCA.jpg') }}">
                            <img src="{{ asset('assets/galerry/citraplatindo.jpg') }}">
                            <img src="{{ asset('assets/galerry/fieris.png') }}">
                            <img src="{{ asset('assets/galerry/mpp.png') }}">
                            <img src="{{ asset('assets/galerry/mss.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 1px;">
            <div>
            </div>
        @endsection
