@extends('admin.layouts.app')

@section('title', 'Pembina')


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
                        <div class="gap-3 d-flex align-items-center">

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

                        <table class="table mb-5 table-striped">
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
                                        <td>{{ $pembinas->firstItem() + $loop->index }}</td>
                                        <td>{{ $pembina->nama_pembina }}</td>
                                        <td>{{ $pembina->alamat }}</td>
                                        <td>{{ $pembina->bagian_kerja }}</td>
                                        <td>
                                            <span
                                                class="badge @if ($pembina->status == 'active') bg-success @else bg-danger @endif">{{ $pembina->status }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown"><i
                                                        class="bx bx-dots-vertical-rounded"></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('pembina.edit', $pembina->id) }}"><i
                                                            class="bx bx-edit-alt me-1"></i>Edit</a>
                                                    <form action="{{ route('pembina.destroy', $pembina->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn"
                                                            onclick="return confirm('apakah ingin menghapus data pembina ? maka akun ini tidak akan bisa diakses lagi')"><i
                                                                class="bx bx-trash me-1"></i>Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex align-items-baseline justify-content-between">
                            <p class="mb-0">Show {{ $pembinas->firstItem() }} to {{ $pembinas->lastItem() }} of total
                                {{ $pembinas->total() }} entries</p>
                            {{ $pembinas->links() }}
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
