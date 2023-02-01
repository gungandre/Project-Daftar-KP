@extends('admin.layouts.app')

@section('title', 'Pembina')


@section('content')

    <div class="row">
        <div class="col-lg-12 mb-4">

            <div class="card">



                <div class="card-body">

                    @if (session('message_success'))
                        <div class="alert alert-success">{{ session('message_success') }}</div>
                    @endif

                    @if (session('message_failed'))
                        <div class="alert alert-success">{{ session('message_failed') }}</div>
                    @endif

                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <p class="mb-0">Show {{ $pembinas->count() }} Entries</p>

                            <a href="{{ route('pembina.create') }}" class="btn btn-primary">Create Pembina</a>
                        </div>

                        <div class="form-group">
                            <form action="#" method="get">
                                <input type="text" name="search" id="search" class="form-control"
                                    placeholder="search pembina">
                            </form>
                        </div>

                    </div>

                    <div class="table-responsive-sm">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Pembina</td>
                                    <td>Alamat</td>
                                    <td>Jabatan</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pembinas as $pembina)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pembina->nama_pembina }}</td>
                                        <td>{{ $pembina->alamat }}</td>
                                        <td>{{ $pembina->bagian_kerja }}</td>
                                        <td>
                                            <span
                                                class="badge @if ($pembina->status == 'aktif') bg-success @else bg-danger @endif">{{ $pembina->status }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i
                                                            class="bx bx-trash me-1"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
