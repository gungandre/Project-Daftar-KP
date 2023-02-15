@extends('admin.layouts.app')

@section('title', 'dashboard menu')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            @if (null === ($data ?? null) && Auth::user()->roles == 'user')
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-7">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Congratulations John! 🎉</h5>
                                <p class="mb-4">
                                    Kamu Harus mengupdate Data Diri dan <span class="fw-bold">Password</span> Agar lebih aman
                                </p>
                                <a href="" class="btn btn-sm btn-outline-primary">Update Profile & Password?</a>
                            </div>
                        </div>
                        <div class="col-sm-5 text-center text-sm-left">
                            <div class="card-body pb-0 px-0 px-md-4">
                                <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                    alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png" />
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            <div class="card p-2 my-2">
                <div class="row">
                    @if (Auth::user()->roles == 'admin')
                        @include('admin.layouts.dashboard.admin-dashboard')
                    @elseif (Auth::user()->roles == 'pembina')
                        @include('admin.layouts.dashboard.pembina-dashboard')
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
