@section('title', 'Garda Mitra Nasional')
@extends('layouts.homepage.template')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6" style="padding-top: 150px">
                <img src="{{ asset('assets/images/tentang.png') }}"
                    style="width: 513px;height: 299px;left: 155px;top: 173px">
            </div>
            <div class="col-12 col-md-6 col-lg-6" style="color:#BB1D33; padding-top: 200px;
                                text-align: left; font-family: Poppins;font-weight: 700; font-size: 35px;">Sejarah
                <p style="font-size:14px;font-weight: 400; color:#350106">Badan Usaha Jasa Pengamanan (BUJP) dan didirikan
                    pada tanggal 5 November 2010.
                    Memiliki personil pengamanan yang handal dan profesional Membangun hubungan dan komunikasi
                    yang harmonis serta memberi solusi bagi pengguna jasa Mengembangkan kerja sama.
                    yang harmonis serta memberi solusi bagi pengguna jasa Mengembangkan kerja sama dan koordinasi yang baik
                    dengan badan keamanan pemerintah dan aparat keamanan setempat (TNI/POLRI/APPEM) Membina hubungan baik
                    dengan masyarakat.</p>
            </div>
        </div>
    </div>
    <!-- kata pengantar -->
    <div class="container" style="padding-top: 150px;">
        <div class="row">
            <div class="col-2 col-lg-1" style="padding-top: 50px">
                <img src="{{ asset('assets/images/ic-struktur.png') }}"
                    style="width: 85px;height: 103px;left: 155px;top: 548px;">
            </div>
            <div class="col-10 col-lg-11" style="color:#BB1D33; padding-top: 75px;
                                text-align: left; font-family: Poppins; font-weight: 700;font-size: 28px; width: 500px">
                &ensp;Kata Pengantar Direktur
            </div>
        </div>
    </div>
    <div class="container">
        <center>
            <div class="row" style="padding-top: 50px;">
                <div class="col-3">
                    <img src="{{ asset('assets/galerry/direktur.png') }}"
                        style="width: 299px ;height:513px;left: 155px;top: 173px">
                </div>
                <div class="col-9 align-self-center">
                    <blockquote class="blockquote">
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                            erat a ante.</p>
                        <p> </p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
    </div>
    <!-- /kata pengantar -->
    <div class="container">
        <center>
            <div class="row" style="padding-top: 50px;">
                <div class="col-1"></div>
                <div class="col-10">
                    <img src="{{ asset('assets/images/ic-visi.png') }}"
                        style="width: 182px;height: 138px;left: 549px;top: 1194px;">
                </div>
                <div class="col-1"></div>
            </div>
    </div>

    <!-- visi misi -->
    <div class="container" style="padding-bottom: 50px;">
        <div class="row">
            <div align="right" class="col-3" style="padding-top: 50px">
                <img src="{{ asset('assets/images/ic-misi.png') }}"
                    style="width: 61px; height: 74px; left: 246px; top: 1399px;">
            </div>
            <div class="col-9" style="color:#BB1D33; padding-top: 75px;
                                text-align: left; font-family: Poppins;font-weight: 600; font-size: 28px;">Visi
            </div>

        </div>
        <div class="row">
            <div class="col-8" align="left" style="font-size: 16px font-weight: 400;">
                Menjadi perusahaan jasa pengamanan Nasional dan sebagai mitra strategis yang terpercaya
            </div>
        </div>

        <div class="row">

            <div align="right" class="col-3" style="padding-top: 50px">
                <img src="{{ asset('assets/images/ic-misi.png') }}"
                    style="width: 61px; height: 74px; left: 246px; top: 1399px;">
            </div>
            <div class="col-9" style="color:#BB1D33; padding-top: 75px;
                                text-align: left; font-family: Poppins;font-weight: 600; font-size: 28px;">Misi
            </div>
        </div>
        <div class="row">
            <div class="col-3">
            </div>
            <div class="col-7" align="left" style="font-size: 16px font-weight: 400;">
                <ol>Mewujudkan keamanan dan ketertiban di lingkungan kerja dalam rangka mendukung sistem PAM SWAKARSA</ol>
                <ol>Memberikan rasa aman dan nyaman</ol>
                <ol>Memberikan jasa pengamanan secara profesional</ol>
                <ol>Menjamin keselamatan dan keamanan bagi personil, material, dan kegiatan di lingkungan kerja</ol>
                <ol>Mencegah, meniadakan serta mengatasi masalah keamanan yang dilakukan oleh pihak eksternal maupun
                    internal yang akan mengganggu dan merugikan.</ol>
                <ol>Memberikan saran dan masukan ke pengguna jasa demi lancarnya kegiatan usaha mitra.</ol>

            </div>
            <div class="col-2">
            </div>
        </div>
    </div>

    <!-- /visi misi -->
    <!-- 4 card pelayanan -->
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="card border-0">
                    <img src="{{ asset('assets/images/ic-home.png') }}" class="card-img-top" alt="..."
                        style="width: 87px;height: 107px;" align=center>
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-4">Koordinasi</h4>
                        </div>
                        <h5 class="mb-4" style="font-size: 14px;width: 215px;line-height: 21px;">Melakukan
                            koordinasi secara rutin degan apparat managemen dan warga setempat</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-3">
                <div class="card border-0">
                    <img src="{{ asset('assets/images/ic-home.png') }}" class="card-img-top" alt="..."
                        style="width: 87px;height: 107px;">
                    <div class="card-body">
                        <div class="card-title">
                            <h5 class="mb-4">SOP,PSO & PROTAP</h4>
                        </div>
                        <h5 class="mb-4" style="font-size: 14px;width: 215px;line-height: 21px;">Menjalankan
                            fungsi pengamanan dan pelayanan serta melaksanakan SOP, PSO dan Protap secara Konsisten serta
                            melakuka evaluasi dan sharing knowladge</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-3">
                <div class="card border-0">
                    <img src="{{ asset('assets/images/ic-home.png') }}" class="card-img-top" alt="..."
                        style="width: 87px;height: 107px;">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-4">Pengawasan</h4>
                        </div>
                        <h5 class="mb-4" style="font-size: 14px;width: 215px;line-height: 21px;">Melakukan
                            Pengawasan secara berjenjang dan berkelanjutan terhadap pelaksanaan tugas personel di lokasi
                            penjagaan</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-3">
                <div class="card border-0">
                    <img src="{{ asset('assets/images/ic-home.png') }}" class="card-img-top" alt="..."
                        style="width: 87px;height: 107px;">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="mb-4">Pembinaan</h4>
                        </div>
                        <h5 class="mb-4" style="font-size: 14px;width: 215px;line-height: 21px;">Melakukan
                            pemeliharaan dan peningkatan kemampuan secara berlanjut serta selalu mengikuti perkembangan
                            sesuai kebutuhan</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /4 card pelayanan -->
    <!-- <div class="row">
                <div align="right" class="col-3" style="padding-top: 50px">
                <img src="{{ asset('assets/images/ic-misi.png') }}"style="width: 61px; height: 74px; left: 246px; top: 1399px;">
                </div>
                <div class="col-9"style="color:#BB1D33; padding-top: 75px;
                                text-align: left; font-family: Poppins;font-weight: 600; font-size: 28px;">Strategi
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-7" align="left" style="font-size: 16px">
                <ol>Memiliki personil pengamanan yang handal dan profesional</ol>
                <ol>Membangun hubungan dan komunikasi yang harmonis serta memberi solusi bagi pengguna jasa</ol>
                <ol>Mengembangkan kerja sama dan koordinasi yang baik dengan badan keamanan pemerintah dan aparat keamanan setempat (TNI/POLRI/APPEM)</ol>
                <ol>Membina hubungan baik dengan masyarakat</ol>
                </div>
                <div class="col-3"></div>

            </div>
         -->
    <!-- <div class="row">
        <p style="padding-top: 90px;font-family: Poppins;font-weight: 700; font-size: 35px; width: 500px
        align-items: center; justify-content: center; color:#BB1D33">Sasaran</p>
        <p align="left" style="font-size: 16px">Menciptakan suasana aman dengan cara menyelenggarakan sistem pengamanan dan keselamatan manusia baik pribadi
             maupun kelompok serta harta benda pemilik. Para professional yang bergabung dalam PT. Garda Mitra Nasional
             dibangun dan dibesarkan dari kompetensi dan pengalaman untuk membuat lebih baik dalam bidang jasa pengelolaan
             keamanan.<br>
        </div>
        <div class="row" align="left" style="width: 1000px; padding-bottom:15px">
            <li> Perencanaan dan pengembangan sistem keamanan yang lebih baik dan efisien
        </li><li>Struktur biaya operasional yang lebih baik dan kompetitif
        </li><li>Security sebagai benteng perusahaan dari berbagai ancaman dan tindakan pelanggaran ketertiban selalu dibekali pengetahuan dan ketrampilan yang
        mampu bertindak dengan cepat dan akurat sesuai dengan petunjuk Instansi Pembina yaitu POLRI
        </li> -->
    </div>
    </div>


@endsection
