@extends('admin.layouts.app')
@section('title', 'Pembina')
@section('content')

    <div class="card p-4">

        <form class="form-control" action="{{ route('user-absen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="form6Example3" class="form-control" name="nama_lengkap"
                    value="{{ Auth::user()->nama_lengkap }}" readonly />
                <label class="form-label" for="form6Example3">Nama Lengkap</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="form6Example4" class="form-control" name="instansi_pendidikan"
                    value="{{ Auth::user()->magang->instansi_pendidikan }}" readonly />
                <label class="form-label" for="form6Example4">Nama Instansi Pendidikan</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" class="form-control" name="tanggal" value="{{ now('GMT+8') }}" />
                <label class="form-label"">Tanggal Absen</label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <input type="file" id="form6Example6" class="form-control" name="file_kegiatan" />
                <label class="form-label" for="form6Example6">Upload File Kegiatan</label>
            </div>

            <select class="form-select form-select-lg mb-3" name="kehadiran" aria-label=".form-select-lg example">
                <option selected>Pilih Kehadiran</option>
                <option value="HADIR">HADIR</option>
                <option value="IZIN">IZIN</option>
                <option value="ALPHA">ALPHA</option>
            </select>
            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" rows="4" name="logbook_kegiatan"></textarea>
                <label class="form-label" for="form6Example7">Masukan Logbook</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
        </form>


    </div>
@endsection
