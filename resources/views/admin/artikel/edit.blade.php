<x-app-layout title="Edit Artikel">

    <div class="container">

        <h1 class="welcome mt-5">Edit Artikel</h1>

        <div class="row">
            <div class="col-md-8">
                <div class="card mt-3 mb-5">
                    <div class="card-body">
                        <form action="{{ route('admin.artikel.update', $artikel) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="image" class="col-form-label">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" onchange="previewImage()" value="{{ old('image') }}">
                                <img class="img-preview img-fluid col mt-3">
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul" class="col-form-label">Judul</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul"
                                    name="judul" value="{{ old('judul', $artikel->judul) }}">
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="isi" class="col-form-label">Isi</label>
                                <textarea class="form-control" id="isi" name="isi" rows="10">{{ old('isi', $artikel->isi) }}</textarea>
                                @error('isi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="button mb-3">
                                <button type="submit" class="btn btn-danger btn-modal">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                .create(document.querySelector('#isi'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush

</x-app-layout>
