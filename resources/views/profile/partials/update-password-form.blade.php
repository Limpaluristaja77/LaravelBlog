<section>
    <header>
        <h2 class="text-lg font-medium text-base-content">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-base-content">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        {{-- Current Password --}}
        <fieldset class="fieldset">
            <legend class="fieldset-legend">@lang('Current Password')</legend>
            <input 
                id="update_password_current_password" 
                name="current_password" 
                type="password" 
                class="input w-full" 
                autocomplete="current-password"
            />
            @if ($errors->updatePassword->get('current_password'))
                <p class="label text-error">
                    {{ $errors->updatePassword->first('current_password') }}
                </p>
            @endif
        </fieldset>

        {{-- New Password --}}
        <fieldset class="fieldset">
            <legend class="fieldset-legend">@lang('New Password')</legend>
            <input 
                id="update_password_password" 
                name="password" 
                type="password" 
                class="input w-full" 
                autocomplete="new-password"
            />
            @if ($errors->updatePassword->get('password'))
                <p class="label text-error">
                    {{ $errors->updatePassword->first('password') }}
                </p>
            @endif
        </fieldset>

        {{-- Confirm Password --}}
        <fieldset class="fieldset">
            <legend class="fieldset-legend">@lang('Confirm Password')</legend>
            <input 
                id="update_password_password_confirmation" 
                name="password_confirmation" 
                type="password" 
                class="input w-full" 
                autocomplete="new-password"
            />
            @if ($errors->updatePassword->get('password_confirmation'))
                <p class="label text-error">
                    {{ $errors->updatePassword->first('password_confirmation') }}
                </p>
            @endif
        </fieldset>

        <div class="flex items-center gap-4">
            <button class="btn btn-primary">
                {{ __('Save') }}
            </button>

            @if (session('status') === 'password-updated')
                <p 
                    x-data="{ show: true }" 
                    x-show="show" 
                    x-transition 
                    x-init="setTimeout(() => show = false, 2000)" 
                    class="text-sm text-base-content"
                >
                    {{ __('Saved.') }}
                </p>
            @endif
        </div>
    </form>
</section>
