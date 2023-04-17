@extends('admin.layouts.app')

@section('title', 'Magang - Tambah Pembina')

@section('content')

    <div class="row">
        <div class="mb-4">
            <div class="card">
                <div class="card-body">

                    <form action="{{ route('magang.pembina-add', $magang->id) }}" method="post">

                        @csrf
                        @method('PUT')

                        <div class="mb-2 row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                        value="{{ $magang->User->nama_lengkap }}" readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="nim" class="form-label">Nim</label>
                                    <input type="text" name="nim" id="nim" class="form-control"
                                        value="{{ $magang->nim_nis }}" readonly>
                                </div>

                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control"
                                        value="{{ $magang->alamat }}" readonly>
                                </div>

                            </div>

                            <div class="col">


                                <div class="mb-3">
                                    <label for="mulai_magang" class="form-label">Mulai Magang</label>
                                    <input type="text" class="form-control" value="{{ $magang->mulai_magang }}" readonly
                                        name="mulai_magang">
                                </div>

                                <div class="mb-3">
                                    <label for="selesai_magang" class="form-label">Selesai Magang</label>
                                    <input type="text" class="form-control" value="{{ $magang->selesai_magang }}"
                                        readonly name="selesa_magang">
                                </div>


                                <div class="mb-3">
                                    <label for="email" class="form-label">email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        value="{{ $magang->email }}" readonly>
                                </div>

                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="nama_pembina" class="form-label">Pilih Pembina</label>
                            <select name="nama_pembina" id="nama_pembina" class="form-control">

                                <option value="" disabled selected>-- Pilih Pembina --</option>

                                @foreach ($pembina as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_pembina }}</option>
                                @endforeach

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
