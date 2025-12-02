@extends('partials.layout')
@section('title', 'Reset Password')
@section('content')


    <div class="card w-96 bg-base-100 shadow-xl mx-auto">
        <div class="card-body">
            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Email')</legend>
                    <input type="email" name="email" class="input"
                        value="{{ old('email', $request->email) }}"
                        placeholder="@lang('Email')" required autofocus autocomplete="username">
                    @error('email')
                        <p class="label">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Password -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Password')</legend>
                    <input type="password" name="password" class="input"
                        placeholder="@lang('Password')" required autocomplete="new-password">
                    @error('password')
                        <p class="label">{{ $message }}</p>
                    @enderror
                </fieldset>

                <!-- Confirm Password -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Confirm Password')</legend>
                    <input type="password" name="password_confirmation" class="input"
                        placeholder="@lang('Confirm Password')" required autocomplete="new-password">
                    @error('password_confirmation')
                        <p class="label">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-primary ms-3">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
