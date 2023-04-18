@extends('admin.layouts.app')

@section('title', 'Data Magang')

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

                            <div class="mb-3 form-group">
                                <form action="{{ route('magang.index') }}" method="get">

                                    @csrf

                                    <input type="text" name="search" id="search" class="form-control"
                                        placeholder="search magang with name">
                                </form>
                            </div>

                        </div>
                    </div>


                    <div class="table-responsive">

                        <table class="table mb-5 table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Pembina</td>
                                    <td>Nama Lengkap</td>
                                    <td>Nim</td>
                                    <td>email</td>
                                    <td>Instansi</td>

                                    <td>Devisi Pembina</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($magangs as $magang)
                                    <tr>
                                        <td>{{ $magangs->firstItem() + $loop->index }}</td>
                                        <td>
                                            @if ($magang->pembina)
                                                {{ $magang->pembina->nama_pembina }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>{{ $magang->user->nama_lengkap }}</td>
                                        <td>{{ $magang->nim_nis }}</td>
                                        <td>{{ $magang->email }}</td>
                                        <td>{{ $magang->instansi_pendidikan }}</td>

                                        <td>
                                            @if ($magang->PembinaCopty)
                                            @foreach ($magang->PembinaCopty->divisi as $divisi)
                                                {{ $divisi->nama_divisi }}
                                            @endforeach
                                            @else
                                           --
                                        @endif
                                        </td>
                                        <td>
                                            <span
                                                class="badge @if ($magang->status == 'active') bg-success @else bg-danger @endif">{{ $magang->status }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('magang.edit', $magang->id) }}"><i
                                                            class="bx bx-edit-alt me-1"></i>

                                                        @if (!is_null($magang->HistoryMagang) && $magang->HistoryMagang->status_permintaan_pertimbangan == 'waiting')
                                                            Lihat Pertimbangan
                                                        @else
                                                            Edit Status
                                                        @endif

                                                    </a>
                                                    @if (Auth::user()->roles == 'admin' && is_null($magang->pembina) && $magang->status == 'active')
                                                        <a class="dropdown-item"
                                                            href="{{ route('magang.pembina', $magang->id) }}"><i
                                                                class='bx bxs-user-plus'></i>Tambah Pembina</a>
                                                    @endif
                                                    <a class="dropdown-item"
                                                        href="{{ route('magang.show', $magang->id) }}"><i
                                                            class='bx bxs-info-circle me-1'></i>Lihat Data</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex align-items-baseline align-items-betweeen">
                            <p>Showing {{ $magangs->lastItem() }} of total {{ $magangs->total() }} entries</p>
                            {{ $magangs->links() }}
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

@endsection
