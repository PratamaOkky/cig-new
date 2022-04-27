<x-app-layout title="Data Gaji">

    <div class="container">
        <div class="card mt-5 border-0">
            <div class="card-content">
                <div class="card-body" style="text-align: justify">
                    <h1 class="welcome mb-4">Data Gaji</h1>
                    <p>Halaman ini memuat data-data yang berisi penggajian pegawai. Keseluruhan data gaji pegawai berada
                        pada halaman ini. Silahkan untuk mencari pada kolom search untuk mencari nama pegawai yang
                        diinginkan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table id="table-gaji" class="table table-responsive table-striped table-sm text-center">
                    <thead>
                        <tr>
                            <th class="text-center"><input type="checkbox" name="checkAll" id="checkAll"></th>
                            <th class="text-center">NIP</th>
                            <th class="text-center">Gaji</th>
                            <th class="text-center">Total Gaji</th>
                            <th class="text-center"> Action <br> <button href="#"
                                    class="btn btn-danger btn-sm mb-3 d-none" id="deleteAll">Delete Selected</button>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')

    @push('page-scripts')
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function() {

                var table = $('#table-gaji').DataTable({
                    processing: true,
                    serverside: true,
                    info: true,
                    ajax: "{{ route('admin.gaji.all') }}",
                    "pageLength": 5,
                    "aLengthMenu": [
                        [5, 10, 25, 50, -1],
                        [5, 10, 25, 50, "All"]
                    ],
                    columns: [{
                            data: 'checkbox',
                            name: 'checkbox',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'nip',
                            name: 'nip'
                        },
                        {
                            data: 'gaji',
                            name: 'gaji'
                        },
                        {
                            data: 'total',
                            name: 'total'
                        },
                        {
                            data: 'actions',
                            name: 'actions',
                            orderable: false,
                            searchable: false
                        },
                    ],
                    order: [
                        [0, 'asc']
                    ]
                });

                $(document).on('click', '#delete', function(data) {
                    var id = $(this).data('id');
                    var url = '<?= route('admin.gaji.delete') ?>';

                    swal.fire({
                        title: 'Are You Sure?',
                        html: 'You Want to <b>Delete</b> This Data',
                        showCancelButton: true,
                        showCloseButton: true,
                        cancelButtonText: 'Cancel',
                        confirmButtonText: 'Yes, Delete',
                        cancelButtonColor: '#d33',
                        confirmButtonColor: '#556ee6',
                        width: 300,
                        allowOutSideClick: false
                    }).then(function(result) {
                        if (result.value) {
                            $.post(url, {
                                id: id
                            }, function(data) {
                                if (data.code == 1) {
                                    $('#table-gaji').DataTable().ajax.reload(null, false);
                                    Swal.fire(
                                        'Deleted!',
                                        'Your file has been deleted.',
                                        'success'
                                    )
                                } else {
                                    toastr.error(data.msg);
                                }
                            }, 'json');
                        }
                    })
                });

                $(document).on('click', 'input[name="checkAll"]', function() {
                    if (this.checked) {
                        $('input[name="id"]').each(function() {
                            this.checked = true;
                        });
                    } else {
                        $('input[name="id"]').each(function() {
                            this.checked = false;
                        });
                    }
                    toggledeleteAllBtn();
                });

                $(document).on('change', 'input[name="id"]', function() {

                    if ($('input[name="id"]').length == $('input[name="id"]:checked').length) {
                        $('input[name="checkAll"]').prop('checked', true);
                    } else {
                        $('input[name="checkAll"]').prop('checked', false);
                    }
                    toggledeleteAllBtn();
                });


                function toggledeleteAllBtn() {
                    if ($('input[name="id"]:checked').length > 0) {
                        $('button#deleteAll').text('Delete (' + $('input[name="id"]:checked').length + ')').removeClass(
                            'd-none');
                    } else {
                        $('button#deleteAll').addClass('d-none');
                    }
                }

                $(document).on('click', '#deleteAll', function() {
                    var id = [];
                    $('input[name="id"]:checked').each(function() {
                        id.push($(this).data('id'));
                    });

                    var url = '{{ route('admin.gaji.select') }}';
                    if (id.length > 0) {
                        swal.fire({
                            title: 'Are you sure?',
                            html: 'You want to delete <b>(' + id.length + ')</b> data',
                            showCancelButton: true,
                            showCloseButton: true,
                            confirmButtonText: 'Yes, Delete',
                            cancelButtonText: 'Cancel',
                            confirmButtonColor: '#556ee6',
                            cancelButtonColor: '#d33',
                            width: 300,
                            allowOutsideClick: false
                        }).then(function(result) {
                            if (result.value) {
                                $.post(url, {
                                    id: id
                                }, function(data) {
                                    if (data.code == 1) {
                                        $('#table-gaji').DataTable().ajax.reload(null, true);
                                        Swal.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                        )
                                    }
                                }, 'json');
                            }
                        })
                    }
                });

            });
        </script>
    @endpush

</x-app-layout>
