{{-- Edit Password --}}
<div class="modal fade" id="edit-{{ auth()->user()->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{ route('user.password.edit') }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="old_password" class="col-form-label">Password Lama</label>
                        <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                            id="old_password" name="old_password" placeholder="Input Password Lama">
                        @error('old_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="col-form-label">password Baru</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" placeholder="Input password Baru">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="col-form-label">Konfirmasi password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                            id="password_confirmation" name="password_confirmation"
                            placeholder="Konfirmasi password Baru">
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="button mb-3">
                        <button type="submit" class="btn btn-danger btn-modal">Ubah Password</button>
                    </div>

                    <div class="button mb-3">
                        <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Close</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
{{-- End Edit Password --}}
