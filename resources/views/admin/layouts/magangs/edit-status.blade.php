@extends('admin.layouts.app')

@section('title', 'Data Magang')

@section('content')

    <div class="row">

        <div class="mb-4 col">

            <div class="card">

                <div class="card-body">

                    <form action="{{ route('magang.change-status', $magang->id) }}" method="post">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                value="{{ $magang->user->nama_lengkap }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label for="mulai_magang" class="form-label">Mulai Magang</label>
                            <input type="text" class="form-control" value="{{ $magang->mulai_magang }}" readonly
                                name="mulai_magang">
                        </div>

                        <div class="mb-3">
                            <label for="selesai_magang" class="form-label">Selesai Magang</label>
                            <input type="text" class="form-control" value="{{ $magang->selesai_magang }}" readonly
                                name="selesa_magang">
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control">

                                <option value="" selected disabled>-- Pilih Status Approve --</option>
                                <option value="active" @if ($magang->status == 'active') selected @endif>Active</option>
                                <option value="inactive" @if ($magang->status == 'inactive') selected @endif>Inactive</option>
                                <option value="ditolak" @if ($magang->status == 'ditolak') selected @endif>ditolak </option>
                            </select>
                        </div>
                        @if (!is_null($magang->HistoryMagang))
                            <hr>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status Pertimbangan</label>
                                <input type="text" class="form-control"
                                    value="{{ $magang->HistoryMagang->status_permintaan_pertimbangan }}" readonly
                                    name="status_permintaan_pertimbangan">
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control" rows="3" readonly>{{ $magang->HistoryMagang->keterangan }}</textarea>
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="status" class="form-label">Description</label>
                            <textarea name="status_desc" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $magang->status_desc }}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('magang.index') }}" class="btn btn-secondary">Kembali</a>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
