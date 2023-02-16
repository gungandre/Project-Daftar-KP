@extends('admin.layouts.app')
@section('title', 'Data Nilai')
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
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <form action="{{ route('nilai.index') }}" method="get">
                                    @csrf
                                    <input type="text" name="search" id="search" class="form-control"
                                        placeholder="search magang with name">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive-sm">
                        <table class="table mb-5 table-striped">
                            <thead class="text-center">
                                <tr>
                                    <td>No</td>
                                    <td>Nama Lengkap</td>
                                    <td>Instansi Pendidikan</td>
                                    <td>Mulai Magang</td>
                                    <td>Selesai Magang</td>
                                    <td>Nilai</td>
                                    <td>Keterangan</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($nilais as $data)
                                    <tr>
                                        <td>{{ $nilais->firstItem() + $loop->index }}</td>
                                        <td>{{ $data->magang->nama_lengkap }}</td>
                                        <td>{{ $data->magang->instansi_pendidikan }}</td>
                                        <td>{{ $data->magang->mulai_magang }}</td>
                                        <td>{{ $data->magang->selesai_magang }}</td>
                                        <td>
                                            @if (is_null($data->nilai))
                                                -
                                            @else
                                                {{ $data->nilai }}
                                            @endif
                                        </td>
                                        <td>
                                            @if (is_null($data->keterangan))
                                                -
                                            @else
                                                {{ $data->keterangan }}
                                            @endif
                                        </td>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('nilai.edit', $data->id) }}"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex align-items-baseline align-items-betweeen">
                            <p>Showing {{ $nilais->lastItem() }} of total {{ $nilais->total() }} enteries</p>
                            {{ $nilais->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
