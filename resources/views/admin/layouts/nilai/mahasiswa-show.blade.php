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
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Nilai</th>
                    <th scope="col">Satuan Nilai</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Etika</td>
                    <td>{{$nilais->etika}}</td>
                    <td>{{$nilais->nilaiKet->ket_etika}}</td>
                  </tr>
                  <tr>
                    <td>Tugas</td>
                    <td>{{$nilais->tugas}}</td>
                    <td>{{$nilais->nilaiKet->ket_tugas}}</td>
                  </tr>
                  <tr>
                    <td>Absen</td>
                    <td>{{$nilais->absen}}</td>
                    <td>{{$nilais->nilaiKet->ket_absen}}</td>
                  </tr>
                  <tr>
                    <td>Tanggung Jawab</td>
                    <td>{{$nilais->tanggung_jawab}}</td>
                    <td>{{$nilais->nilaiKet->ket_tanggung_jawab}}</td>
                  </tr>
                  <tr>
                    <td>Kerjasama</td>
                    <td>{{$nilais->kerjasama}}</td>
                    <td>{{$nilais->nilaiKet->ket_kerjasama}}</td>
                  </tr>
                  <tr>
                    <td>Inisiatif</td>
                    <td>{{$nilais->inisiatif}}</td>
                    <td>{{$nilais->nilaiKet->ket_inisiatif}}</td>
                  </tr>
                  <tr>
                    <td>Skill</td>
                    <td>{{$nilais->skill}}</td>
                    <td>{{$nilais->nilaiKet->ket_skill}}</td>
                  </tr>
                  <tr>
                    <td colspan="2">Total Nilai</td>
                    <td>{{$nilais->total_nilai}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="col">
            <div class="card-body">
                <h3>Nilai Rata Rata : </h3>
                <div class="card p-5 shadow ">
                    <h1>{{ $nilais->total_rata ?? $tidak }}</h1>
                </div>
            </div>
            <div class="card-body">
                <h3>Keterangan Maggang : </h3>
                <div class="card p-5 shadow ">
                    <h4>{{ $nilais->keterangan ?? $tidak }}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
