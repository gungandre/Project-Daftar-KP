@extends('admin.layouts.app')

@section('title', 'Kegiatan Magang')


@section('content')

    <div class="row">
        <div class="mb-4 col-lg-12">

            <div class="card">

                <div class="card-body">

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" id="nama-lengkap"
                                    value="{{ $magang->nama_lengkap }}" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">NIM</label>
                                <input type="text" name="" id="" value="{{ $magang->nim_nis }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">NIM</label>
                                <input type="text" name="" id="" value="{{ $magang->nim_nis }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Alamat</label>
                                <input type="text" name="" id="" value="{{ $magang->alamat }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">No Handphone</label>
                                <input type="text" name="" id="" value="{{ $magang->no_hp }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="text" name="" id="" value="{{ $magang->email }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Instansi Pendidikan</label>
                                <input type="text" name="" id=""
                                    value="{{ $magang->instansi_pendidikan }}" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Pembina</label>
                                <input type="text" name="" id=""
                                    value="{{ $magang->pembina->nama_pembina  ?? null}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Jurusan</label>
                                <input type="text" name="nama_lengkap" id="nama-lengkap" value="{{ $magang->jurusan }}"
                                    class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Mulai Magang</label>
                                <input type="text" name="nama_lengkap" id="nama-lengkap"
                                    value="{{ $magang->mulai_magang }}" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Selesai Magang</label>
                                <input type="text" name="nama_lengkap" id="nama-lengkap"
                                    value="{{ $magang->selesai_magang }}" class="form-control" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Foto</label>
                                <img src="{{ asset('Image/' . $magang->foto) }}" class="img-fluid d-block"
                                    style="width:200px; height:200px; object-fit:cover;">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">File Kegiatan</label>
                                <a class="d-block"
                                    href="{{ route('magang.downloadPdf', $magang->surat_magang) }}">{{ $magang->surat_magang }}</a>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Status</label>
                                <input type="text" name="" id="" value="{{ $magang->status }}"
                                    class="form-control" readonly>
                            </div>
                        </div>
                    </div>



                    <a href="{{ route('magang.index') }}" class="btn btn-secondary">Kembali</a>

                </div>

            </div>

        </div>
    </div>

@endsection
