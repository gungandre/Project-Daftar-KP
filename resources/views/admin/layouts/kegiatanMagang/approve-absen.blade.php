@extends('admin.layouts.app')

@section('title', 'Approve Absen')


@section('content')

    <div class="row">
        <div class="mb-4 col-lg-12">

            <div class="card">

                <div class="card-body">

                    <form action="{{ route('kegiatan-magang.update', $kegiatanMagang->id) }}" method="post">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama-lengkap"
                                value="{{ $kegiatanMagang->nama_lengkap }}" class="form-control" readonly>
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
                            <label for="">Kehadiran</label>
                            <input type="text" name="" id="" value="{{ $kegiatanMagang->kehadiran }}"
                                class="form-control" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">File Kegiatan</label>
                            <a class="d-block"
                                href="{{ route('kegiatan-magang.download-pdf', ['file' => $kegiatanMagang->file_kegiatan]) }}">{{ $kegiatanMagang->file_kegiatan }}</a>
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Status Approve</label>
                            <select name="status" id="status" class="form-control">
                                <option value="" disabled selected>-- Pilih Status Approve --</option>
                                <option value="not yet received" @if ($kegiatanMagang->status == 'not yet received') selected @endif>Not Yet
                                    Received</option>
                                <option value="approve" @if ($kegiatanMagang->status == 'approve') selected @endif>Approve</option>
                                <option value="rejected" @if ($kegiatanMagang->status == 'rejected') selected @endif>Rejected</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update Data Absensi</button>
                        <a href="{{ route('kegiatan-magang.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>

                </div>

            </div>

        </div>
    </div>

@endsection
