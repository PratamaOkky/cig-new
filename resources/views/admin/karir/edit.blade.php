<x-app-layout title="Edit Karir">

    <div class="container">

        <h1 class="welcome mt-5">Edit Karir</h1>

        <div class="row">
            <div class="col-md-8">
                <div class="card mt-3 mb-5">
                    <div class="card-body">
                        <form action="{{ route('admin.karir.update', $karir) }}" method="POST"
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
                                <label for="lowongan" class="col-form-label">Nama Karir</label>
                                <input type="text" class="form-control @error('lowongan') is-invalid @enderror" id="lowongan"
                                    name="lowongan" value="{{ old('lowongan', $karir->lowongan) }}">
                                @error('lowongan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="posisi" class="col-form-label">Posisi</label>
                                <input class="form-control @error('posisi') is-invalid @enderror" id="posisi" name="posisi" value="{{ old('posisi', $karir->posisi) }}">
                                @error('posisi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="detail" class="col-form-label">Detail</label>
                                <textarea class="form-control" id="detail" name="detail">{{ old('detail', $karir->detail) }}</textarea>
                                @error('detail')
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
                .create(document.querySelector('#detail'))
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endpush

</x-app-layout>
