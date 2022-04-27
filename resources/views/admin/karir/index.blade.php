<x-app-layout title="Karir">

    @slot('styles')
        <style>
            .icon {
                display: inline;
                background: transparent;
                border: 0;
                margin-left: -185px;
            }

            .img-fluid {
                margin-left: 1%;
                width: 65px;
                height: 65px;
            }

            .boxs {
                width: 50px;
                height: 50px;
                margin-top: 45px !important;
                background: #bb1d33;
                border-radius: 15px;
            }

            i .bi-plus-circle,
            .bi-person-workspace {
                margin-left: 55px;
                position: relative;
                top: -70px;
                color: black;
            }

            @media (min-width: 992px) {
                .block {
                    width: 996px;
                    height: 73px;
                    margin: -55px 0 15px;
                    background: rgba(187, 29, 51, 0.1);
                    border-radius: 26px;
                }

                .boxs {
                    width: 50px;
                    height: 50px;
                    background: #bb1d33;
                    border-radius: 15px;
                }

                i .bi-plus-circle,
                .bi-person-workspace {
                    margin-left: 55px;
                    position: relative;
                    top: -70px;
                    color: black;
                }

                .card {
                    background: transparent;
                }

                .img-fluid {
                    width: 65px;
                    height: 65px;
                }

                .icon {
                    display: inline;
                    background: transparent;
                    border: 0;
                    margin-left: -50px;
                }
            }

        </style>
    @endslot

    <div class="container mb-5">
        <nav class="navbar navbar-light">
            <h1 class="welcome py-5">Konten Karir</h1>
            <form action="{{ route('admin.karir.index') }}" class="d-flex">
                <input class="form-control me-auto" type="text" placeholder="Search..." name="search"
                    value="{{ request('search') }}">
                <button type="submit" class="icon"><i class="fa fa-search"></i></button>
            </form>
        </nav>

        <div class="row py-5 text-center">
            <div class="col-md-6">
                <div class="card border-0 d-flex align-items-center">
                    <div class="card-body">
                        <div class="box ms-3">
                            <h1 class="card-title py-2">
                                {{ $total }}
                            </h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i
                                    class="bi bi-plus-circle h6"></i></a>
                        </div>
                        <p class="card-text pt-2 ms-3">Karir</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 d-flex align-items-center">
                    <div class="card-body">
                        <div class="box ms-2">
                            <h1 class="card-title py-2">
                                {{ $pelamar }}
                            </h1>
                            <a href="{{ route('admin.pelamar.index') }}"><i class="bi bi-person-workspace"></i></a>
                        </div>
                        <p class="card-text pt-2">Pelamar</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="garis"></div>

        <div class="block d-block ms-5"></div>

        @if ($karirs->count())

            <div class="container py-2">
                <div class="row">
                    @foreach ($karirs as $karir)
                        <div class="col-md-4">
                            <div class="card mt-5 border d-flex align-items-center">
                                @if ($karir->image)
                                    <img src="{{ asset('storage/' . $karir->image) }}" class="img-fluid mt-3">
                                @else
                                    <img src="{{ asset('assets/images/faces/1.jpg') }}" class="img-fluid mt-3">
                                @endif

                                <div class="card-body text-center">
                                    <h5 class="card-title">{{ \Illuminate\Support\Str::limit($karir->lowongan, 50) }}</h5>
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($karir->posisi, 50) }}</p>
                                    <p class="card-text"><small
                                            class="text-muted">{{ $karir->created_at->diffForHumans() }}</small>
                                    </p>

                                    <a href="{{ route('admin.karir.edit', $karir) }}" class="btn btn-danger ms-2">Ubah</a>

                                    <form action="{{ route('admin.karir.destroy', $karir) }}" method="POST"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-secondary border-0"
                                            onclick="return confirm('Yakin Hapus Data?')">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="container mt-5 d-flex justify-content-center">
                        {{ $karirs->links() }}
                    </div>
                </div>
            </div>
        @else
            <div class="container d-flex justify-content-center mb-5">
                <div class="col-12 col-md-8">
                    <div class="card mt-5 d-flex align-items-center">
                        <img src="/assets/images/samples/error-404.png" class="img-fluid align-content-center">
                        <p class="card-title mt-2">Belum Ada karir</p>
                    </div>
                </div>
            </div>

        @endif

    </div>

    @include('admin.karir.create')

    @include('sweetalert::alert')

    @push('scripts')
        <script>
            function previewImage() {
                const image = document.querySelector('#image');
                const imgPreview = document.querySelector('.img-preview');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(image.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script>

        <script>
            ClassicEditor
                .create(document.querySelector('#detail'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush

</x-app-layout>
