<x-app-layout title="Data Pegawai">

    @slot('styles')
        <style>
            .img {
                width: 45px;
                height: 45px;
            }
        </style>
    @endslot

    <div class="container py-5">

        <h1 class="welcome mb-4">Data Pegawai</h1>
        <div class="row py-5 text-center">
            <div class="col-md-6">
                <div class="card border-0 d-flex align-items-center justify-content-center">
                    <div class="card-body">
                        <div class="box ms-3">
                            <h1 class="card-title py-2">
                                {{ $user }}
                            </h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#register"><i
                                    class="bi bi-plus-circle h6"></i></a>
                        </div>
                        <p class="card-text pt-2">Pengguna</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-0 d-flex align-items-center justify-content-center">
                    <div class="card-body">
                        <div class="box">
                            <h1 class="card-title py-2">
                                {{ $admin }}
                            </h1>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#tambah"><i
                                    class="bi bi-plus-circle h6"></i></a>
                        </div>
                        <p class="card-text pt-2">Admin</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="garis"></div>
        <div class="rectangle d-block mb-5 ms-5"></div>
    </div>

    <div class="container table py-3 mb-5">
        <div class="row">
            <div class="d-block justify-content-center">
                <table id="table_id" class="table table-responsive table-striped table-sm text-center">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td><img src="{{ asset('storage/' . $user->image) }}" class="img rounded-circle"></td>
                                <td><small>{{ $user->nip }}</small></td>
                                <td><small>{{ $user->name }}</small></td>
                                <td><small>{{ $user->jabatan }}</small></td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="#" class="btn text-warning h5" data-bs-target="#edit-{{ $user->id }}"
                                        data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></a>
                                    <form action="{{ route('admin.user.destroy', $user) }}" method="POST"
                                        class="form-store">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-danger h6 border-0"><i
                                                class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>

    @include('admin.pegawai.edit')

    @include('admin.pegawai.register')

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

            $(document).ready(function() {
                $('#table_id').DataTable({
                    responsive: true
                });
            });

            flatpickr('#flatpickr', {
                altInput: true,
                altFormat: "d F Y",
            })
        </script>
    @endpush

</x-app-layout>
