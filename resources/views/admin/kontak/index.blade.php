<x-app-layout title="Kontak">

    <div class="container py-5 mt-3">
        <h1 class="welcome">Customer Service</h1>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6 col-lg-8">
                <div class="row">
                    @foreach ($contacts as $contact)
                        <div class="col-md-3 col-lg-4 mb-3">
                            <div class="card">
                                <div class="card-body text-center mb-3">
                                    <form action="{{ route('admin.contact.destroy', $contact) }}" method="POST"
                                        class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="text-secondary border-0 mb-4"
                                            onclick="return confirm('Yakin Hapus Data?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                    </form>
                                    <p class="card-text">{{ $contact->name }}</p>
                                    <p class="card-text"><small>{{ \Illuminate\Support\Str::limit($contact->email, 10)}}</small></p>
                                    <button class="btn btn-danger" data-bs-target="#edit-{{ $contact->id }}"
                                        data-bs-toggle="modal">Lihat Detail</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="container mt-5 d-flex justify-content-center">
                        {{ $contacts->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <img src="{{ asset('assets/images/kontak.png') }}" class="img-fluid img-contact">
                <h1>{{ $msg }}</h1>
                <p>contact</p>
            </div>
        </div>
    </div>

    @include('admin.kontak.detail')

    @include('sweetalert::alert')

</x-app-layout>
