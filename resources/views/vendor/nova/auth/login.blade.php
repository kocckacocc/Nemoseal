@extends('nova::auth.layout')

@section('content')

{{-- @include('nova::auth.partials.header') --}}

<div class="relative w-full px-4 py-24 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-8 py-12 space-y-10 bg-neutral xl:px-10 bg-opacity-95">
            <form
                method="POST"
                action="{{ route('nova.login') }}"
            >
                {{ csrf_field() }}

                {{-- @component('nova::auth.partials.heading')
                    {{ __('Welcome Back!') }}
                @endcomponent --}}

                @if ($errors->any())
                <p class="my-3 font-semibold text-center text-danger">
                    @if ($errors->has('email'))
                        {{ $errors->first('email') }}
                    @else
                        {{ $errors->first('password') }}
                    @endif
                </p>
                @endif

                <div class="mb-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="form__label" for="email">{{ __('Email Address') }}</label>
                    <div class="mt-1">
                        <input class="form__control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                </div>

                <div class="mb-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="form__label" for="password">{{ __('Password') }}</label>
                    <div class="mt-1">
                        <input class="form__control" id="password" type="password" name="password" required>
                    </div>
                </div>

                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center block text-xl">
                        <input class="w-4 h-4 border-transparent rounded text-secondary focus:ring-2 focus:ring-secondary" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="block ml-2 text-sm text-white">{{ __('Remember Me') }}</span>
                    </label>

                    @if (\Laravel\Nova\Nova::resetsPasswords())
                    <div class="text-sm">
                        <a class="font-medium text-secondary hover:text-secondary-light" href="{{ route('nova.password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                    @endif
                </div>

                <button class="btn" type="submit">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
