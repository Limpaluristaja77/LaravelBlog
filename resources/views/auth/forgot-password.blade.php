@extends('partials.layout')
@section('title', __('Forgot Password'))
@section('content')

    <div class="card w-96 bg-base-100 shadow-xl mx-auto">
        <div class="card-body">
            <p>
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <fieldset class="fieldset">
                    <legend class="fieldset-legend">@lang('Email')</legend>
                    <input type="email" name="email" class="input"
                        value="{{ old('email') }}"
                        placeholder="@lang('Email')" required autofocus />

                    @error('email')
                        <p class="label">{{ $message }}</p>
                    @enderror
                </fieldset>

                <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-primary">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
