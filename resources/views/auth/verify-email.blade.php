@extends('partials.layout')
@section('title', 'Verify Email')
@section('content')
<div class="flex justify-center mt-10">
    <div class="card w-full max-w-md bg-base-100 shadow-xl">
        <div class="card-body space-y-4">

            <h2 class="card-title text-center">{{ __('Verify Your Email') }}</h2>

            <p class="mt-1 text-sm text-base-content">
                {{ __('Thanks for signing up! Please verify your email address by clicking the link we just sent you. If you didn’t receive it, you can request another email below.') }}
            </p>

            @if (session('status') === 'verification-link-sent')
                <div class="alert alert-success p-3 text-sm">
                    {{ __('A new verification link has been sent to your email address.') }}
                </div>
            @endif

            <div class="flex flex-col space-y-3">

                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button class="btn btn-primary w-full">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="btn btn-ghost w-full text-sm">
                        {{ __('Log Out') }}
                    </button>
                </form>

            </div>

        </div>
    </div>
</div>
@endsection
