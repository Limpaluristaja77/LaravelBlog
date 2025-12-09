@extends('partials.layout')
@section('title', 'Confirm Password')

@section('content')
    <div class="flex justify-center mt-10">
        <div class="card w-full max-w-md bg-base-100 shadow-xl">
            <div class="card-body space-y-4">

                <div class="mt-4 text-sm text-base-content">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </div>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <!-- Password -->
                    <fieldset class="fieldset">
                        <legend class="fieldset-legend">@lang('Password')</legend>
                        <input type="password" name="password" class="input" value="{{ old('password') }}"
                            placeholder="@lang('Password')" required autocomplete="current-password" />
                        @error('password')
                            <p class="label">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <div class="flex justify-end mt-4">
                        <button class="btn btn-primary">
                            {{ __('Confirm') }}
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection