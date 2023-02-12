@extends('admin.layouts.app')
@section('title', 'Pembina')
@section('content')
    <div class="card p-4">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table class="table table-striped" id="datatable">
                <thead>
                    <tr>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Instansi Pendidikan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kehadiran</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

@endsection
@push('script')
    <script type="text/javascript">
        $(document).ready(function() {
            dataTable = $("#datatable").DataTable({
                ajax: "{{ route('user-absen.index') }}?type=datatable",
                processing: true,
                orderable: true,
                autoWidth: false,
                order: [
                    [1, "asc"]
                ],
                columns: [{
                        data: "nama_lengkap",
                        name: "nama_lengkap",
                        orderable: true
                    },
                    {
                        data: "instansi_pendidikan",
                        name: "instansi_pendidikan",
                        orderable: true
                    },
                    {
                        data: "tanggal",
                        name: "tanggal",
                        orderable: true
                    },
                    {
                        data: "kehadiran",
                        name: "kehadiran",
                        orderable: true
                    },
                    {
                        data: "action",
                        name: "action",
                        orderable: false
                    },
                ]
            });
        });
    </script>
@endpush
