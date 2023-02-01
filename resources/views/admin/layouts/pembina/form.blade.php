@extends('admin.layouts.app')

@section('title', 'Create Data Pembina')


@section('content')

    <div class="row">

        <div class="col-lg-12 mb-4">

            <div class="card">

                @include('admin.layouts.pembina.createForm')

            </div>

        </div>

    </div>

@endsection
