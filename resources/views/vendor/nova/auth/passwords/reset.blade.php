@extends('nova::auth.layout')

@section('content')

{{-- @include('nova::auth.partials.header') --}}

<div class="relative w-full px-4 py-24 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-8 py-12 space-y-10 bg-neutral xl:px-10 bg-opacity-95">
            <form
                method="POST"
                action="{{ route('nova.password.request') }}"
            >
                {{ csrf_field() }}

                {{-- @component('nova::auth.partials.heading')
                    {{ __('Reset Password') }}
                @endcomponent --}}

                @include('nova::auth.partials.errors')

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="mb-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="form__label" for="email">{{ __('Email Address') }}</label>
                    <div class="mt-1">
                        <input class="form__control" id="email" type="email" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                    </div>
                </div>

                <div class="mb-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="form__label" for="password">{{ __('Password') }}</label>
                    <div class="mt-1">
                        <input class="form__control" id="password" type="password" name="password" required>
                    </div>
                </div>

                <div class="mb-6 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="form__label" for="password-confirm">{{ __('Confirm Password') }}</label>
                    <div class="mt-1">
                        <input class="form__control" id="password-confirm" type="password" name="password_confirmation" required>
                    </div>
                </div>

                <button class="btn" type="submit">
                    {{ __('Reset Password') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
