{{-- Form Pelamar --}}
<div class="modal fade" id="tambah">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Kirim Lamaran Anda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('career.store') }}" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="col-form-label">name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                            placeholder="Input name" required autofocus value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="Input Email" required autofocus value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="col-form-label">No. Hp</label>
                        <input class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp"
                            placeholder="Input No. Hp" value="{{ old('nohp') }}" required>
                        @error('nohp')
                            <div class="invalid-feedback">
                                <p class="text-danger">{{ $message }}</p>
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="posisi" class="col-form-label">Posisi Yang Dilamar</label>
                        <input type="posisi" class="form-control @error('posisi') is-invalid @enderror" name="posisi"
                            id="posisi" placeholder="Input posisi" required value="{{ old('posisi') }}">
                        @error('posisi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="cv" class="col-form-label">Berkas Anda</label>
                        <input type="file" class="form-control @error('cv') is-invalid @enderror" name="cv" id="cv"
                            placeholder="Input cv" required autofocus value="{{ old('cv') }}">
                        @error('cv')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="button mb-3">
                        <button type="submit" class="btn btn-danger btn-modal" style="width: 100%">Kirim
                            Lamaran</button>
                    </div>
                    <div class="button mb-3">
                        <button type="button" class="btn btn-secondary btn-modal" style="width: 100%"
                            data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Form Pelamar --}}
