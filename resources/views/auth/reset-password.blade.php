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


            <!-- Email Address -->
            <div class="mb-3">
                <x-label for="current_password" :value="__('Current Password')" class="form-label" />

                <x-input id="email" id="current_password" name="current_password" type="password" class="mt-1 block w-full form-control"
                autocomplete="current-password" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('New Password')" class="form-label" />

                <x-input id="password" id="password" name="password" type="password" class="mt-1 form-control block w-full"
                autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')"  class="form-label"/>

                <x-input id="password_confirmation" name="password_confirmation" type="password"
                class="mt-1 block w-full form-control" autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="btn btn-primary">
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
@endsection
