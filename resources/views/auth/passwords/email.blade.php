@extends('layouts.app')

@section('content')
    <section class="d-flex flex-wrap login-register">
        <div class="left-side">
            <div class="left-side-content d-flex flex-column">
                <h2 class="title-h3 mb-5 pb-5">{{ __('Reset Password') }}</h2>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.email') }}" class="mt-3">
                    @csrf

                    <div class="form-div email">
                        <input id="email" placeholder="{{ __('E-Mail Address') }}" type="email"
                               class="form-input @error('email') is-invalid @enderror"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>

                    <button type="submit" class="btn-yellow">
                        {{ __('Send Password Reset Link') }}
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
                        <input id="reservation_number" type="email"
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
                        <input id="email" type="email" placeholder="{{ __('Email address') }}"
                               class="form-input form-input-bordered {{ $errors->has('email_address') ? ' is-invalid' : '' }}"
                               name="email" required>

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
