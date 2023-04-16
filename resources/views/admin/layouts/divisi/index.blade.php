@extends('admin.layouts.app')

@section('title', 'Divisi')
@section('content')
    <div class="card">

        <div class="card-body">

            <div class="mb-4 d-flex align-items-center justify-content-between">
                <div class="gap-3 d-flex align-items-center">

                    <a href="{{ route('divisi.create') }}" class="btn btn-primary">Create Divisi</a>
                </div>

            </div>

            <table class="table table-striped" id="datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Divisi</th>
                        <th scope="col">Jumlah Orang</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($divisis as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_divisi }}</td>
                            <td>{{ $data->pembina_count }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="5">Data Not Found</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
            <div class="mt-3 d-flex justify-content-center">
                {{ $divisis->links() }}
            </div>
        </div>
    </div>

@endsection
