@extends('auth.layout.app')
@section('content')

<section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center p-4" style="background: white">
    <h1 class="/">Mohon Tunggu Untuk Update</h1>
    <h2 class="text-info">Reques anda sudah kami terima mohon tunggu informasi lebih lanjut lagi </h2>
    <a class="btn btn-primary" href="{{route('login')}}">Back to home</a>
    <img src="{{asset('assets/img/internship-concept-illustration_114360-6675.avif')}}" class="img-fluid py-5" alt="Page Not Found">
    <div class="credits">
    </div>
</section>

@endsection

