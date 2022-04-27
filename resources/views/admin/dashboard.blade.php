<x-app-layout title="Dashboard">

    <div class="container mt-3 py-3">

        <h1 class="welcome mt-4">Selamat Datang</h1>

        <div class="card mb-3 mt-4 py-2 border-0" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    @if ( auth()->user()->image )
                        <img src="{{ asset('storage/'. auth()->user()->image) }}" class="img-fluid ms-3 pt-1" alt="{{ auth()->user()->name }}">
                    @else
                        <img src="{{ asset('assets/images/faces/1.jpg') }}" alt="null" class="img-fluid ms-3 pt-1">
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ auth()->user()->name }}</h5>
                        <p class="card-text">{{ auth()->user()->jabatan }}</p>
                        <p class="card-text"><small class="text-muted">{{ auth()->user()->nip }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center mb-5">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-borderless mt-3">

                    <tbody>
                        <tr>
                            <td><small>Kelahiran : {{ auth()->user()->tempat_lahir }} ,
                                    {{ date('d F Y', strtotime(auth()->user()->tgl_lahir)) }}</small></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin : {{ auth()->user()->gender->gender }}</td>
                        </tr>
                        <tr>
                            <td>Agama : {{ auth()->user()->agama }}</td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan : {{ auth()->user()->kewarganegaraan }}</td>
                        </tr>
                        <tr>
                            <td>Alamat : {{ auth()->user()->alamat }}</td>
                        </tr>
                        <tr>
                            <td>Status Pajak : {{ auth()->user()->pajak }}</td>
                        </tr>
                        <tr>
                            <td>Mulai PKWT : {{ date('d F Y', strtotime(auth()->user()->awal_pkwt)) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col">
                <table class="table table-striped table-borderless mt-3">
                    <tbody>
                        <tr>
                            <td>Tahun Masuk : {{ date('d F Y', strtotime(auth()->user()->tgl_masuk)) }}</td>
                        </tr>
                        <tr>
                            <td>NIK : {{ auth()->user()->nik }}</td>
                        </tr>
                        <tr>
                            <td>NIP : {{ auth()->user()->nip }}</td>
                        </tr>
                        <tr>
                            <td>NPWP : {{ auth()->user()->npwp }}</td>
                        </tr>
                        <tr>
                            <td>BPJS Kesehatan : {{ auth()->user()->bpjs_kes }}</td>
                        </tr>
                        <tr>
                            <td>BPJS Tenaga Kerja : {{ auth()->user()->bpjs_tk }}</td>
                        </tr>
                        <tr>
                            <td>Akhir PKWT : {{ date('d F Y', strtotime(auth()->user()->akhir_pkwt)) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @if ( $gaji->count() )
            <div class="row">
                <div class="col-md-2 d-flex justify-content-end ms-auto">
                    <a href="{{ route('admin.gaji.download') }}" class="btn btn-danger mt-3 mb-5 border-0"><small>Slip
                            Gaji</small></a>
                </div>
            </div>
        @else

        @endif
    </div>


    @include('admin.pegawai.editpassword')

    @include('sweetalert::alert')

</x-app-layout>
