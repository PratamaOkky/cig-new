<x-app-layout title="Artikel">

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

            @media (min-width: 992px) {
                .block {
                    width: 1196px;
                    height: 73px;
                    margin-top: -75px;
                    background: rgba(187, 29, 51, 0.1);
                    border-radius: 26px;
                }

                .boxs {
                    width: 50px;
                    height: 50px;
                    background: #bb1d33;
                    border-radius: 15px;
                }

                i .bi-plus-circle {
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
            <h1 class="welcome py-5">Konten Artikel</h1>
            <form action="{{ route('admin.artikel.index') }}" class="d-flex">
                <input class="form-control me-auto" type="text" placeholder="Search..." name="search"
                    value="{{ request('search') }}">
                <button type="submit" class="icon"><i class="fa fa-search"></i></button>
            </form>
        </nav>

        <div class="col text-center">
            <div class="card border-0 d-flex align-items-center justify-content-center">
                <div class="card-body">
                    <div class="boxs mb-2 mt-4">
                        <h1 class="card-title py-2">
                            {{ $art }}
                        </h1>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i
                                class="bi bi-plus-circle"></i></a>
                    </div>
                    <p class="card-text">Artikel</p>
                </div>
            </div>
        </div>

        <div class="block d-block ms-5"></div>

        @if ($artikels->count())

            <div class="container py-2">
                <div class="row">
                    @foreach ($artikels as $artikel)
                        <div class="col-md-4">
                            <div class="card mt-5 border d-flex align-items-center">
                                @if ($artikel->image)
                                    <img src="{{ asset('storage/' . $artikel->image) }}" class="img-fluid mt-3">
                                @else
                                    <img src="{{ asset('assets/images/faces/1.jpg') }}" class="img-fluid mt-3"
                                        alt="P">
                                @endif

                                <div class="card-body text-center">
                                    <h5 class="card-text">{{ \Illuminate\Support\Str::limit($artikel->judul, 50) }}</h5>
                                    <p class="card-text">{!! \Illuminate\Support\Str::limit($artikel->isi, 50) !!}</p>
                                    <p class="card-text"><small
                                            class="text-muted">{{ $artikel->created_at->diffForHumans() }}</small>
                                    </p>

                                    <a href="{{ route('admin.artikel.edit', $artikel) }}" class="btn btn-danger me-2">Ubah</a>

                                    <form action="{{ route('admin.artikel.destroy', $artikel) }}" method="POST"
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
                        {{ $artikels->links() }}
                    </div>
                </div>
            </div>
        @else
            <div class="container d-flex justify-content-center mb-5">
                <div class="col-12 col-md-8">
                    <div class="card mt-5 d-flex align-items-center">
                        <img src="/assets/images/samples/error-404.png" class="img-fluid align-content-center">
                        <p class="card-title mt-2">Belum Ada Artikel</p>
                    </div>
                </div>
            </div>

        @endif

    </div>

    @include('admin.artikel.create')

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
            .create( document.querySelector( '#isi' ) )
            .catch( error => {
                console.error( error );
            } );
        </script>
    @endpush

</x-app-layout>
