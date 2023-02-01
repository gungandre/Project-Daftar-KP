@extends('admin.layouts.app')

@section('title', 'Create Data Pembina')

@section('content')

    <div class="row">

        <div class="col-lg-12 mb-4">

            <div class="card">

                <div class="card-body">
                    @if (Request()->route()->getName() == 'pembina.create')
                        @include('admin.layouts.pembina.createForm')
                    @endif
                </div>

            </div>

        </div>

    </div>

@endsection
