@extends('admin.layouts.app')

@section('title', 'Kegiatan Magang')


@section('content')

    <div class="row">
        <div class="mb-4 col-lg-12">

            <div class="card">



                <div class="card-body">

                    @if (session('message_success'))
                        <div class="alert alert-success">{{ session('message_success') }}</div>
                    @endif

                    @if (session('message_failed'))
                        <div class="alert alert-danger">{{ session('message_failed') }}</div>
                    @endif

                    <div class="mb-4 d-flex align-items-center justify-content-between">

                        <div class="form-group">
                            <form action="{{ route('pembina.index') }}" method="get">

                                @csrf

                                <input type="text" name="search" id="search" class="form-control"
                                    placeholder="search kegiatan magang">
                            </form>
                        </div>

                    </div>

                    <div class="table-responsive-sm">

                        <table class="table mb-5 table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Instansi Pendidikan</th>
                                    <th scope="col">Tanggal Kegiatan</th>
                                    <th scope="col">Kehadiran</th>
                                    <th scope="col">status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($absens as $data)
                                    <tr>
                                        <td>{{ $absens->firstItem() + $loop->index }}</td>
                                        <td>{{ $data->nama_lengkap }}</td>
                                        <td>{{ $data->instansi_pendidikan }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td> <span
                                                class="badge @if ($data->kehadiran == 'HADIR') bg-success @else bg-danger @endif">{{ $data->kehadiran }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="badge @if ($data->status == 'approve') bg-success @else bg-danger @endif">{{ $data->status }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('kegiatan-magang.edit', $data->id) }}"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('kegiatan-magang.show', $data->id) }}">
                                                        <i class="menu-icon tf-icons bx bxs-receipt"></i>Lihat
                                                        Kegiatan</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10">Data Not Found</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="d-flex align-items-baseline justify-content-between">
                            <p class="mb-0">Show {{ $absens->firstItem() }} to {{ $absens->lastItem() }} of total
                                {{ $absens->total() }} entries</p>
                            {{ $absens->links() }}
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
