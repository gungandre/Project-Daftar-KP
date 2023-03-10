@extends('auth.layout.app')
@section('content')
@section('form-login', 'login')
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/img/Lambang_Kabupaten_Manggarai-150x150.png') }}" class="text-center"  style="max-width: 100px" alt="">
        </div>

        <!-- Logo -->
        <div class="app-brand justify-content-center">
            <a href="index.html" class="gap-2 app-brand-link">
                <span class="app-brand-text demo text-body fw-bolder">Login</span>
            </a>
        </div>

        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email"
                    placeholder="Enter your email or username" autofocus />
            </div>
            <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    {{-- <a href="{{ route('password.request') }}">
                        <small>Forgot Password?</small>
                    </a> --}}
                </div>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password" />
                    <span class="cursor-pointer input-group-text"><i class="bx bx-hide"></i></span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
                    <label class="form-check-label" for="remember-me">
                        Remember Me
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">
                    Sign in
                </button>
            </div>
        </form>
    </div>
</div>




@endsection
