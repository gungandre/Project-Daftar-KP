@extends('admin.layouts.app')
@section('title', 'Data Nilai')
@section('content')

    <div class="card mb-3" style="max-height: 300px; ">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('Image/' . $magang->foto) }}" style="max-height: 300px; width: 400px; Object-fit: cover;"
                    class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title">{{ $magang->nama_lengkap }}</h3>
                    <h4 class="card-text">{{ $magang->nim_nis }}</h4>
                    <h4 class="card-text">{{ $magang->email }}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row  card my-4 mb-3 p-3">
        <div class="col p-5">
            <h2>Nama : {{ $magang->nama_lengkap }}</h2>

            <div class="mt-5">
                <h5>Instansi : {{ $magang->instansi_pendidikan }}</h5>
                <h5>Mulai Magang : {{ $magang->mulai_magang }}</h5>
                <h5>Selesai Magang : {{ $magang->selesai_magang }}</h5>
            </div>

        </div>
        <div class="col">
            <div class="card-body">
                <h3>Nilai : </h3>
                <div class="card p-5 shadow ">
                    <h1>{{ $nilais->nilai ?? $tidak }}</h1>
                </div>
            </div>
            <div class="card-body">
                <h3>Keterangan : </h3>
                <div class="card p-5 shadow ">
                    <h1>{{ $nilais->keterangan ?? $tidak }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
