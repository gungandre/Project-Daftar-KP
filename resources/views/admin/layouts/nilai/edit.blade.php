@extends('admin.layouts.app')

@section('title', 'Nilai Anak Magang')


@section('content')

    <div class="row">
        <div class="mb-4 col-lg-12">

            <div class="card">

                <div class="card-body">

                    <form action="{{ route('nilai.update', $nilai->id) }}" method="post">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" readonly value="{{ $nilai->magang->nama_lengkap }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mulai Magang</label>
                            <input type="text" class="form-control" readonly value="{{ $nilai->magang->mulai_magang }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Selesai Magang</label>
                            <input type="text" class="form-control" readonly
                                value="{{ $nilai->magang->selesai_magang }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nilai</label>
                            <input type="text" name="nilai" class="form-control" value="{{ $nilai->nilai }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control" style="height:200px;">{{ $nilai->keterangan }}</textarea>
                        </div>


                        <button type="submit" class="btn btn-primary">Beri Nilai</button>
                        <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>

                </div>

            </div>

        </div>
    </div>

@endsection
