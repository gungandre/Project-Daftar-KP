@extends('admin.layouts.app')

@section('title', 'Nilai Anak Magang')


@section('content')

    <div class="row">
        <div class="mb-4 col-lg-12">

            <div class="card">

                <div class="card-body">

                    <form action="{{ route('nilai.update', $nilai->id) }}" method="post">

                        @csrf
                        @method('PUT')
                        <input type="text" name="idNilai" value="{{$nilai->id}}" hidden>
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" readonly  value="{{ $magang->User->nama_lengkap }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mulai Magang</label>
                            <input type="text" class="form-control" readonly value="{{ $nilai->magang->mulai_magang }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Selesai Magang</label>
                            <input type="text" class="form-control" readonly
                                value="{{ $nilai->magang->selesai_magang }}">
                        </div>
                        <div class="card p-2">
                            <h3>Nilai Mahasiswa</h3>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example1">Etika</label>
                                        <input type="text" value="{{$nilai->etika}}" name="etika" id="form3Example1" class="form-control" />
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="form3Example2">keterangan Etika</label>
                                        <input type="text" name="ket_etika" value="{{$nilai->nilaiKet->ket_etika}}"  id="form3Example2" class="form-control" />
                                    </div>
                                  </div>
                            </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Tugas</label>
                                    <input type="text" name="tugas" value="{{$nilai->tugas}}" id="form3Example1" class="form-control" />
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2">keterangan Tugas</label>
                                    <input type="text" name="ket_tugas" value="{{$nilai->nilaiKet->ket_tugas}}"  id="form3Example2" class="form-control" />
                                </div>
                              </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Absen</label>
                                    <input type="text" name="absen" value="{{$nilai->absen}}"  id="form3Example1" class="form-control" />
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2">Keterangan Absen</label>
                                    <input type="text" name="ket_absen" value="{{$nilai->nilaiKet->ket_absen}}" id="form3Example2" class="form-control" />
                                </div>
                              </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Tanggung Jawab</label>
                                    <input type="text" name="tanggung_jawab" value="{{$nilai->tanggung_jawab}}" id="form3Example1" class="form-control" />
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2">Katerangan Tanggung jawab</label>
                                    <input type="text" name="ket_tanggung_jawab" value="{{$nilai->nilaiKet->ket_tanggung_jawab}}"  id="form3Example2" class="form-control" />
                                </div>
                              </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Kerjasama</label>
                                    <input type="text" name="kerjasama" value="{{$nilai->kerjasama}}" id="form3Example1" class="form-control" />
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2">Keterangan kerjasama</label>
                                    <input type="text" name="ket_kerjasama" value="{{$nilai->nilaiKet->ket_kerjasama}}"  id="form3Example2" class="form-control" />
                                </div>
                              </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Inisiatif</label>
                                    <input type="text" name="inisiatif" value="{{$nilai->inisiatif}}"  id="form3Example1" class="form-control" />
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2">Keterangan Inisiatif</label>
                                    <input type="text" name="ket_inisiatif"  value="{{$nilai->nilaiKet->ket_inisiatif}}" id="form3Example2" class="form-control" />
                                </div>
                              </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Skill</label>
                                    <input type="text" name="skill" value="{{$nilai->skill}}"  id="form3Example1" class="form-control" />
                                </div>
                              </div>
                              <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="form3Example2">Keterangan Skill</label>
                                    <input type="text" name="ket_skill" value="{{$nilai->nilaiKet->ket_skill}}" id="form3Example2" class="form-control" />
                                </div>
                              </div>
                        </div>
                    </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control" style="height:200px;">{{ $nilai->keterangan }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Beri Nilai</button>
                        <a href="{{ route('nilai.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>

                </div>

            </div>

        </div>
    </div>

@endsection
