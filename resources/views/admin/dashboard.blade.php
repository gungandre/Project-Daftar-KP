@extends('admin.layouts.app')

@section('title', 'dashboard menu')

@section('content')
    <div class="row">
        <div class="mb-4 col-lg-12 order-0">

            @if (Auth::user()->roles == 'user' && !is_null($data->HistoryMagang))
                @if (is_null($data->HistoryMagang))
                    <div
                        class="card @if ($data->status == 'active') bg-success @elseif($data->status == 'ditolak') bg-danger @endif">
                        <div class="card-body">
                            <h2 class="mb-5 text-white">Pengumuman Seleksi</h2>
                            <h3 class="text-white">status anda {{ $data->status }}</h3>
                            @if ($data->status == 'ditolak')
                                <p class="text-white">keterangan : {{ $data->HistoryMagang->keterangan }}</p>
                                <a class="btn btn-success" href="{{ route('magang.editprofile', $data->id) }}">Lengkapi
                                    Data</a>
                            @elseif($data->status == 'active')
                                <p class="text-white">keterangan : {{ $data->status_desc }}</p>
                            @endif
                        </div>
                    </div>
                @endif


                @if ($data->HistoryMagang->status_permintaan_pertimbangan == 'waiting')
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h3 class="text-white">Permintaan perbaikan anda sudah dikirim</h3>
                            @if ($data->status == 'ditolak')
                                <p class="text-white">Tunggu sampai admin menkonfirmasi permintaan anda.</p>
                            @endif
                        </div>
                    </div>
                @endif
            @elseif(Auth::user()->roles == 'user' && is_null($data->pembina))
                <div
                    class="card  @if ($data->status == 'active') bg-success @elseif($data->status == 'inactive') bg-primary @endif mb-3">
                    <div class="card-body">
                        <h2 class="mb-5 text-white">Pengumuman Seleksi</h2>
                        <h3 class="text-white">status anda {{ $data->status }}</h3>
                        @if ($data->status == 'inactive')
                            <p class="text-white">Silakan tunggu hasil keputusan dari admin</p>
                        @elseif ($data->status == 'active')
                            <p class="text-white">{{ $data->status_desc }}</p>
                        @endif
                    </div>
                </div>
            @endif

            @if (Auth::user()->roles == 'user' && $data->id_pembina == null && $data->status == 'active')
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Selamat {{ $data->User->nama_lengkap }}! 🎉</h5>
                                <p class="mb-4">
                                    Kamu Harus mengupdate Data Diri dan <span class="fw-bold">Password</span> Agar lebih
                                    aman
                                </p>
                                <a href="/changePassword" class="btn btn-sm btn-outline-primary">Update Profile
                                    & Password?</a>
                            </div>
                        </div>
                        <div class="text-center col-sm-5 text-sm-left">
                            <div class="px-0 pb-0 card-body px-md-4">
                                <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="p-2 my-2 card">
                <div class="row">
                    @if (Auth::user()->roles == 'admin' || Auth::user()->roles == 'pembina')
                        @include('admin.layouts.dashboard.admin-dashboard')
                    @else
                        @include('admin.layouts.dashboard.user-dashboard')
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
    </footer>
    <!-- / Footer -->

@endsection
