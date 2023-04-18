@extends('admin.layouts.app')
@section('title', 'Pembina')
@section('content')

    <div class="card p-3">
        <h1>Add Periode Pendaftaran Magang</h1>
        <form action="{{ route('Periode.store') }}" method="POST">
            @csrf

            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example1">Tanggal Pendaftaran</label>
                        <input type="date" name="tanggal_buka" id="form3Example1" class="form-control" />
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form3Example2">Tanggal Penutupan</label>
                        <input type="date" name="tanggal_tutup" id="form3Example2" class="form-control" />
                    </div>
                </div>
            </div>


            <input type="submit" class="btn btn-primary">
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>

                    <th scope="col">Pendaftaran</th>
                    <th scope="col">Penutupan</th>
                    <th scope="col">Status</th>
                    <th scope="col">aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                ?>
                @foreach ($periode as $item)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $item->tanggal_buka }}</td>
                        <td>{{ $item->tanggal_tutup }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a href="{{ route('periode.inactive', $item->id) }}" class="btn btn-primary">Inactive</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



@endsection
