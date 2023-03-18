@extends('admin.layouts.app')
@section('title', 'Data Nilai')
@section('content')

    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4 d-flex align-items-center">
                <img src="{{ asset('Image/' . $magang->foto) }}" style="max-height: 450px; width: 450px; Object-fit: cover;"
                    class="img-fluid rounded-start rounded-circle border-1 mr-5" alt="...">
            </div>
            <div class="col-md-8 ml-2">
                <div class="card-body align-items-center ">

                    <ul class="list-group list-group-light">
                        <li class="" style="list-style: none
                        ">
                            <p><b>Nama :</b> <br> {{ $magang->nama_lengkap }}</p>
                            <hr>
                            <p> <b>NIM :</b> <br> {{ $magang->nim_nis }}</p>
                            <hr>
                            <p> <b>Email :</b> <br> {{ $magang->email }} </p>
                            <hr>
                            <p> <b>Instansi :</b> <br> {{ $magang->instansi_pendidikan }} </p>
                            <hr>
                            <p> <b>Mulai Magang :</b> <br> {{ $magang->mulai_magang }} </p>
                            <hr>
                            <p> <b>Selesai Magang :</b> <br> {{ $magang->instansi_pendidikan }} </p>
                            <hr>
                            <p> <b>Alasan Diterima  :</b> <br> {{ $magang->status_desc }} </p>
                            <hr>
                            <p><b>Status Penerimaan Magang :</b><br>
                                @if(Auth::user()->status == 'active' )
                                    Status Diterima
                                @endif
                            </p>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row  card my-4 mb-3 p-3">
        <div class="col p-5">
        <img src="{{ asset('assets/img/Capture.PNG') }}" alt="" style="max-width: 400px">
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
