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
                                value="{{ $magang->nama_lengkap }}" readonly>
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
                                <option value="reject " @if ($magang->status == 'reject ') selected @endif>reject </option>


                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('magang.index') }}" class="btn btn-secondary">Kembali</a>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
