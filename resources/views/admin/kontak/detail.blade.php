{{-- Edit Modal --}}
@foreach ($contacts as $contact)
    <div class="modal fade" id="edit-{{ $contact->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Pesan Masuk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="col-form-label">Nama</label>
                            <input disabled class="form-control" value="{{ $contact->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label">Email</label>
                            <input disabled class="form-control" value="{{ $contact->email }}">
                        </div>
                        <div class="mb-3">
                            <label for="suject" class="col-form-label">Subject</label>
                            <input disabled class="form-control" value="{{ $contact->subject }}">
                        </div>
                        <div class="mb-3">
                            <label for="isi" class="col-form-label">Isi</label>
                            <textarea disabled class="form-control" rows="10">{{ $contact->isi }}</textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
{{-- Edit Modal --}}
