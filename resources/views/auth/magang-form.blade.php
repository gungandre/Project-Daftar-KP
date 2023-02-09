@extends('auth.layout.app')
@section('content')
    <div class="card">
        <div class="" style="">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/img/manggarai.jpg') }}" class="img-fluid rounded-start" alt="..."
                        style="height: 100%;">
                </div>
                <div class="col">
                    <div class="card-body">
                        <form class="form-control" action="{{ route('magang.storerequest') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <h1 class="text-center">Input Form Magang</h1>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form6Example1" class="form-control" name="nim_nis" />
                                        <label class="form-label" for="form6Example1">Input Nim</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form6Example2" class="form-control"
                                            name="instansi_pendidikan" />
                                        <label class="form-label" for="form6Example2">Instansi Pendidikan</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example3" name="nama_lengkap" class="form-control" />
                                <label class="form-label" for="form6Example3">Nama Lengkap</label>
                            </div>

                            <!-- Text input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example4" class="form-control" name="email" />
                                <label class="form-label" for="form6Example4">Email</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">+62</span>
                                    <input type="text" class="form-control" placeholder="Exampel : 821366458"
                                        aria-label="Username" aria-describedby="basic-addon1" name="no_hp">
                                </div>
                                <label class="form-label" for="form6Example5">Phone Number</label>
                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="form6Example6" class="form-control" name="jurusan" />
                                <label class="form-label" for="form6Example6">Jurusan</label>
                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                                <input type="file" id="form6Example6" class="form-control" name="foto" />
                                <label class="form-label" for="form6Example6">Foto Profile</label>
                            </div>

                            <!-- Number input -->
                            <div class="form-outline mb-4">
                                <input type="file" id="form6Example6" class="form-control" name="surat_magang" />
                                <label class="form-label" for="form6Example6">Surat Magang</label>
                            </div>


                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="date" id="form6Example1" class="form-control" name="mulai_magang" />
                                        <label class="form-label" for="form6Example1">Start Magang</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="date" id="form6Example2" class="form-control"
                                            name="selesai_magang" />
                                        <label class="form-label" for="form6Example2">End Magang</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline mb-4">
                                <textarea class="form-control" id="form6Example7" rows="4" name="alamat"></textarea>
                                <label class="form-label" for="form6Example7">Address</label>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Submit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
