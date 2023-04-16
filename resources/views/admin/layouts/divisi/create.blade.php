@extends('admin.layouts.app')

@section('title', 'Create Pembina')

@section('content')

    <div class="row">

        <div class="mb-4 col-lg-12">

            <div class="card">
                <div class="card-body">

                    <form action="{{ route('divisi.store') }}" method="post">

                        @csrf
                        <div class="mb-3">
                            <label for="nama_divisi" class="form-label">Nama Divisi</label>
                            <input type="text" name="nama_divisi" id="nama_divisi" class="form-control"
                                placeholder="tulis divisi">
                        </div>

                        <button type="submit" class="btn btn-primary">Create Divisi</button>

                    </form>

                </div>
            </div>
        </div>

    </div>

@endsection
