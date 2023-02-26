@extends('admin.layouts.app')

@section('title', 'Kegiatan Magang')


@section('content')
    <x-auth-card >
        <h1 class="p-4 ms-5">Ganti Password</h1>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}" class="p-4">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" class="mb-3" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mb-3">
                <x-label for="email" :value="__('Email')" class="form-label" />

                <x-input id="email"  class="block mt-1 w-full form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" class="form-label"  />

                <x-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')"  class="form-label"/>

                <x-input id="password_confirmation" class="block mt-1 w-full form-control"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="btn btn-primary">
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
@endsection
