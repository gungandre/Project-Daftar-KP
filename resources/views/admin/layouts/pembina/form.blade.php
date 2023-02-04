@extends('admin.layouts.app')

@section('title', 'Create Data Pembina')

@section('content')

    <div class="row">

        <div class="mb-4 col-lg-12">

            <div class="card">

                <div class="card-body">
                    @if (Request()->route()->getName() == 'pembina.create')
                        @include('admin.layouts.pembina.createForm')
                    @endif

                    @if (Request()->route()->getName() == 'pembina.edit')
                        @include('admin.layouts.pembina.editForm')
                    @endif
                </div>

            </div>

        </div>

    </div>

@endsection
