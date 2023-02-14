@extends('admin.layouts.app')

@section('title', 'Kegiatan Magang')


@section('content')

    <div class="row">
        <div class="mb-4 col-lg-12">

            <div class="card">

                <div class="card-body">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" id="nama-lengkap" value="{{ $kegiatanMagang->nama_lengkap }}"
                            class="form-control" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal" class="form-label">tanggal</label>
                        <input type="text" name="tanggal" id="tanggal" value="{{ $kegiatanMagang->tanggal }}"
                            class="form-control" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Logbook Kegiatan</label>
                        <textarea name="" class="form-control" style="height:250px;" readonly>{{ $kegiatanMagang->logbook_kegiatan }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Kehadiran</label>
                        <input type="text" name="tanggal" id="tanggal" value="{{ $kegiatanMagang->kehadiran }}"
                            class="form-control" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="">Status Approve</label>
                        <input type="text" name="" id="" class="form-control"
                            value="{{ $kegiatanMagang->status }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">File Kegiatan</label>
                        <a class="d-block"
                            href="{{ route('kegiatan-magang.download-pdf', ['file' => $kegiatanMagang->file_kegiatan]) }}">{{ $kegiatanMagang->file_kegiatan }}</a>
                    </div>

                    <a href="{{ route('kegiatan-magang.index') }}" class="btn btn-secondary">Kembali</a>

                </div>

            </div>

        </div>
    </div>

@endsection
