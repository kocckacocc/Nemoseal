@extends('nova::auth.layout')

@section('content')

{{-- @include('nova::auth.partials.header') --}}

<div class="relative w-full px-4 py-24 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-8 py-12 space-y-10 bg-neutral xl:px-10 bg-opacity-95">
            <form
                method="POST"
                action="{{ route('nova.password.email') }}"
            >
                {{ csrf_field() }}

                {{-- @component('nova::auth.partials.heading')
                    {{ __('Forgot your password?') }}
                @endcomponent --}}

                @if (session('status'))
                <div class="my-3 font-semibold text-center text-success">
                    {{ session('status') }}
                </div>
                @endif

                @include('nova::auth.partials.errors')

                <div class="mb-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="form__label" for="email">{{ __('Email Address') }}</label>
                    <div class="mt-1">
                        <input class="form__control" id="email" type="email" name="email" value="{{ old('email') }}" required>
                    </div>
                </div>

                <button class="btn" type="submit">
                    {{ __('Send Password Reset Link') }}
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
