@extends('layouts.app')
@section('head')
    <style>
        header {
            border-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <section class="d-flex flex-wrap login-register register flex-md-row flex-column-reverse">
        <div class="left-side">
            <div class="left-side-content">
                <div class="d-flex align-items-center title">
                    <img src="/img/check-mark.svg" alt="Checkmark" class="mr-3">
                    <h2 class="title-h3 mb-0">{{ __('Thank you!') }}</h2>
                </div>

                <p>{{__('Welcome to MeeTeam and thank you for your registration.')}}</p>
                <p>{{__('You will receive a confirmation email from MeeTeam website.')}}</p>
                <div class="yellow-text font-28">{{__('Your MeeTeam')}}</div>

            </div>
        </div>
        <div class="right-side">
            <div class="right-side-content">
                <h2 class="title-h3">{{ __('Register') }}</h2>
                <h6 class="subtitle">{{__('Please add your personal information')}}</h6>
                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                    @csrf

                    <div class="form-div username">

                        <input id="first_name" type="text" placeholder="{{ __('First Name') }}"
                               class="form-input {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                               name="first_name" value="{{ old('first_name') }}" required autofocus>

                        @if ($errors->has('first_name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-div username">

                        <input id="last_name" type="text" placeholder="{{ __('Last Name') }}"
                               class="form-input {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                               name="last_name" value="{{ old('last_name') }}" required autofocus>

                        @if ($errors->has('last_name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-div company">

                        <input id="company_name" type="text" placeholder="{{ __('Company name') }}"
                               class="form-input {{ $errors->has('company_name') ? ' is-invalid' : '' }}"
                               name="company_name" value="{{ old('company_name') }}" required autofocus>

                        @if ($errors->has('company_name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-div street">

                        <input id="street" type="text" placeholder="{{ __('Street') }}"
                               class="form-input {{ $errors->has('street') ? ' is-invalid' : '' }}"
                               name="street" value="{{ old('street') }}" required autofocus>

                        @if ($errors->has('street'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-div zip">

                        <input id="zip" type="number" placeholder="{{ __('ZIP') }}"
                               class="form-input {{ $errors->has('zip') ? ' is-invalid' : '' }}"
                               name="zip" value="{{ old('zip') }}" required autofocus>

                        @if ($errors->has('zip'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-div city">

                        <input id="city" type="text" placeholder="{{ __('City') }}"
                               class="form-input {{ $errors->has('city') ? ' is-invalid' : '' }}"
                               name="city" value="{{ old('city') }}" required autofocus>

                        @if ($errors->has('city'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-div email">

                        <input id="email" type="email" placeholder="{{ __('Email') }}"
                               class="form-input {{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-div phone">

                        <input id="phone" type="number" placeholder="{{ __('Phone') }}"
                               class="form-input {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                               name="phone" value="{{ old('phone') }}" required>

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-div password ">
                        <input id="password" type="password" placeholder="{{ __('Password') }}"
                               class="form-input{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <div class="form-div mb-0 password">

                        <input id="password-confirm" placeholder="{{ __('Confirm password') }}" type="password"
                               class="form-input"
                               name="password_confirmation" required>
                    </div>

                    <div class="mb-5">

                        <button type="submit" class="btn-yellow">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
