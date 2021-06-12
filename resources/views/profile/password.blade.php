@extends('layouts.app')
@section('head')
    <link href="{{ mix('css/profile.css') }}" rel="stylesheet">
@endsection

@section('content')
    <section class="gray-bg d-flex">
        @include('profile.profile_nav')
        <div class="profile-right-side">
            <h2 class="title-h3 mb-5">{{__('Change password')}}</h2>
            <form action="{{route('profile.password.update')}}" class="form-max-width" method="POST">
                @csrf
                <div class="form-div password">
                    <input id="current_password" type="password"
                           class="form-input {{ $errors->has('current_password') ? ' is-invalid' : '' }}"
                           name="current_password" placeholder="{{ __('Current password') }}" value="{{ old('current_password') }}" required>

                    @if ($errors->has('current_password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('current_password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-div password ">
                    <input id="password" type="password"
                           class="form-input{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" placeholder="{{ __('New password') }}" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-div password">
                    <input id="password_confirmation" type="password"
                           class="form-input {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                           name="password_confirmation" placeholder="{{ __('Confirm password') }}" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="text-right">
                    <button type="submit" class="btn-yellow">{{__('Submit')}}</button>
                </div>
            </form>
        </div>
    </section>
@endsection


