@extends('auth.layout.app')
@section('content')
    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center p-4"
        style="background: white">
        <h1 class="/">Mohon Tunggu Untuk Update</h1>
        <h2 class="text-info">Permintaan anda sudah kami terima mohon tunggu informasi lebih lanjut lagi </h2>
        <h4>setelah di setujui oleh pihak magang untuk sementara password anda : 123456789</h4>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-primary mx-auto">Back To Login</button>
        </form>
        <img src="{{ asset('assets/img/internship-concept-illustration_114360-6675.avif') }}" class="img-fluid py-5"
            alt="Page Not Found">
        <div class="credits">
        </div>
    </section>
@endsection
