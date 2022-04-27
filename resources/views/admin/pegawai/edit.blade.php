@foreach ($users as $user)
    <div class="modal fade" id="edit-{{ $user->id }}">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-center align-items-center">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Pengguna</h5>
                </div>

                <div class="modal-body">

                    <form action="{{ route('admin.user.update', $user) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                id="name" value="{{ old('name', $user->name) }}">
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                id="email" value="{{ old('email', $user->email) }}">
                            <div class="invalid-feedback">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="col-form-label">password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                id="password" value="{{ old('password', $user->password) }}">
                            <div class="invalid-feedback">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nip" class="col-form-label">NIP</label>
                            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip"
                                name="nip" value="{{ old('nip', $user->nip) }}">
                            @error('nip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="level_id" class="col-form-label">Level</label>
                            <select class="form-select" id="level_id" name="level_id">
                                <option selected>--- Pilih Level ---</option>
                                @foreach ($levels as $level)
                                    <option value="{{ $level->id }}"
                                        {{ old('level_id', $user->level_id) == $level->id ? 'selected' : null }}>
                                        {{ $level->level }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="gender_id" class="col-form-label">Gender</label>
                            <select class="form-select" aria-label="Default select example" name="gender_id">
                                <option selected>--- Pilih Jenis Kelamin ---</option>
                                @foreach ($genders as $gender)
                                    <option value="{{ $gender->id }}"
                                        {{ old('gender_id', $user->gender_id) == $gender->id ? 'selected' : null }}>
                                        {{ $gender->gender }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="nik" class="col-form-label">NIK</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"
                                name="nik" value="{{ old('nik', $user->nik) }}" placeholder="Input NIK">
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jabatan" class="col-form-label">Jabatan</label>
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                                name="jabatan" value="{{ old('Jabatan', $user->jabatan) }}">
                            @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="divisi" class="col-form-label">Divisi</label>
                            <input type="text" class="form-control @error('divisi') is-invalid @enderror" id="divisi"
                                name="divisi" value="{{ old('divisi', $user->divisi) }}">
                            @error('divisi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="atasan" class="col-form-label">Atasan</label>
                            <input type="text" class="form-control @error('atasan') is-invalid @enderror" id="atasan"
                                name="atasan" value="{{ old('atasan', $user->atasan) }}">
                            @error('atasan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tempat_lahir" class="col-form-label">Tempat Lahir</label>
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                id="tempat_lahir" name="tempat_lahir"
                                value="{{ old('tempat_lahir', $user->tempat_lahir) }}">
                            @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tgl_lahir" class="col-form-label">Tanggal Lahir</label>
                            <input type="text" class="form-control @error('tgl_lahir') is-invalid @enderror"
                                id="flatpickr" name="tgl_lahir" value="{{ old('tgl_lahir', $user->tgl_lahir) }}">
                            @error('tgl_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kewarganegaraan" class="col-form-label">Kewarganegaraan</label>
                            <input type="text" class="form-control @error('kewarganegaraan') is-invalid @enderror"
                                id="kewarganegaraan" name="kewarganegaraan"
                                value="{{ old('kewarganegaraan', $user->kewarganegaraan) }}">
                            @error('kewarganegaraan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="agama" class="col-form-label">Agama</label>
                            <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama"
                                name="agama" value="{{ old('agama', $user->agama) }}">
                            @error('agama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="col-form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                                name="alamat" value="{{ old('alamat', $user->alamat) }}">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="npwp" class="col-form-label">NPWP</label>
                            <input type="text" class="form-control @error('npwp') is-invalid @enderror" id="npwp"
                                name="npwp" value="{{ old('npwp', $user->npwp) }}">
                            @error('npwp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="bpjs_kes" class="col-form-label">No BPJS Kesehatan</label>
                            <input type="text" class="form-control @error('bpjs_kes') is-invalid @enderror"
                                id="bpjs_kes" name="bpjs_kes" value="{{ old('bpjs_kes', $user->bpjs_kes) }}">
                            @error('bpjs_kes')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="bpjs_tk" class="col-form-label">No BPJS Tenaga Kerja</label>
                            <input type="text" class="form-control @error('bpjs_tk') is-invalid @enderror" id="bpjs_tk"
                                name="bpjs_tk" value="{{ old('bpjs_tk', $user->bpjs_tk) }}">
                            @error('bpjs_tk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="instalasi" class="col-form-label">Instalasi</label>
                            <input type="text" class="form-control @error('instalasi') is-invalid @enderror"
                                id="instalasi" name="instalasi" value="{{ old('instalasi', $user->instalasi) }}">
                            @error('instalasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="bank" class="col-form-label">Nama Bank</label>
                            <input type="text" class="form-control @error('bank') is-invalid @enderror" id="bank"
                                name="bank" value="{{ old('bank', $user->bank) }}">
                            @error('bank')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="rekening" class="col-form-label">No. Rekening</label>
                            <input type="text" class="form-control @error('rekening') is-invalid @enderror"
                                id="rekening" name="rekening" value="{{ old('rekening', $user->rekening) }}">
                            @error('rekening')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tgl_masuk" class="col-form-label">Tanggal Masuk</label>
                            <input type="text" id="flatpickr" name="tgl_masuk"
                                class="form-control @error('tgl_masuk') is-invalid @enderror" autofocus
                                value="{{ old('tgl_masuk', $user->tgl_masuk) }}">
                            @error('tgl_masuk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="awal_pkwt" class="col-form-label">Mulai PKWT</label>
                            <input type="text" class="form-control @error('awal_pkwt') is-invalid @enderror"
                                id="flatpickr" name="awal_pkwt" value="{{ old('awal_pkwt', $user->awal_pkwt) }}">
                            @error('awal_pkwt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="akhir_pkwt" class="col-form-label">Akhir PKWT</label>
                            <input type="text" class="form-control @error('akhir_pkwt') is-invalid @enderror"
                                id="flatpickr" name="akhir_pkwt" value="{{ old('akhir_pkwt', $user->akhir_pkwt) }}">
                            @error('akhir_pkwt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="pajak" class="col-form-label">Status Pajak</label>
                            <input type="text" class="form-control @error('pajak') is-invalid @enderror" id="pajak"
                                name="pajak" value="{{ old('pajak', $user->pajak) }}">
                            @error('pajak')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                                id="image" onchange="previewImage()">
                            <img class="img-preview img-fluid mt-3 col-md-4">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="button mb-3">
                            <button type="button" class="btn btn-secondary btn-modal"
                                data-bs-dismiss="modal">Close</button>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-danger">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
