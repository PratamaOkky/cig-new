{{-- Modal Tambah --}}
<div class="modal fade" id="uploadFile">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Upload File Gaji</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('admin.gaji.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="file" class="form-control @error('gaji') is-invalid @enderror" name="gaji" id="gaji"
                            required autofocus value="{{ old('gaji') }}">
                        @error('gaji')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="button mb-3">
                        <button type="submit" class="btn btn-danger btn-modal"
                            style="background-color: #BB1D33">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Modal Tambah --}}
