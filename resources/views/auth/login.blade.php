@extends('layouts.app')

@section('content')
    <section class="d-flex flex-wrap login-register">
        <div class="left-side">
            <div class="left-side-content">
                <h2 class="title-h3">{{ __('Login') }}</h2>

                <h6 class="subtitle">{{__('Please add your personal information')}}</h6>
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                    <div class="form-div username">
                        <input id="username" type="text"
                               class="form-input {{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required
                               autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-div mb-0 password">
                        <input id="password" type="password" placeholder="{{ __('Password') }}"
                               class="form-input {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <a class="forget-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    <button type="submit" class="btn-yellow">
                        {{ __('Submit') }}
                    </button>

                </form>

            </div>
        </div>
        <div class="right-side">
            <div class="right-side-content">
                <h2 class="title-h3">{{ __('No account?') }}<br>{{ __('Check-in here') }}</h2>

                <form method="POST" action="" aria-label="{{ __('') }}">
                    @csrf

                    <div class="form-div reservation">
                        <input id="reservation_number" type="text"
                               class="form-input form-input-bordered {{ $errors->has('reservation_number') ? ' is-invalid' : '' }}"
                               name="reservation_number" placeholder="{{ __('Reservation number') }}"
                               value="{{ old('reservation_number') }}" required>

                        @if ($errors->has('reservation_number'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('reservation_number') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-div email">
                        <input id="email_address" type="email" placeholder="{{ __('Email address') }}"
                               class="form-input form-input-bordered {{ $errors->has('email_address') ? ' is-invalid' : '' }}"
                               name="email_address" required>

                        @if ($errors->has('email_address'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email_address') }}</strong>
                                    </span>
                        @endif

                    </div>

                    <button type="submit" class="btn-yellow">
                        {{ __('Submit') }}
                    </button>

                </form>
            </div>
        </div>
    </section>
@endsection
