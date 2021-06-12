@extends('layouts.app')
@section('head')
    <link href="{{ mix('css/profile.css') }}" rel="stylesheet">

@endsection

@section('content')

    <section class="gray-bg d-flex">
        @include('profile.profile_nav')
        <div class="profile-right-side">
            <h2 class="title-h3">{{__('Personal Information')}}</h2>
            <h6 class="subtitle mb-5">{{__('Please add your personal information')}}</h6>
            <form action="{{route('profile.update')}}" class="form-max-width" method="POST">
                @csrf
                <div class="form-div username">
                    <input id="first_name" type="text"
                           class="form-input {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                           name="first_name" placeholder="{{ __('First Name') }}"
                           value="{{ auth()->user()->first_name }}" required>

                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-div username">
                    <input id="last_name" type="text"
                           class="form-input {{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                           name="last_name" placeholder="{{ __('Last Name') }}" value="{{ auth()->user()->last_name }}"
                           required>

                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-div company">
                    <input id="company_name" type="text"
                           class="form-input {{ $errors->has('company_name') ? ' is-invalid' : '' }}"
                           name="company_name" placeholder="{{ __('Company name') }}"
                           value="{{ auth()->user()->company->name ?? ''}}" required>

                    @if ($errors->has('company_name'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="form-div city">
                    <input id="city" type="city"
                           class="form-input {{ $errors->has('city') ? ' is-invalid' : '' }}"
                           name="city" placeholder="{{ __('City') }}" value="{{ auth()->user()->city }}" required>

                    @if ($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-div street">
                    <input id="street" type="street"
                           class="form-input {{ $errors->has('street') ? ' is-invalid' : '' }}"
                           name="street" placeholder="{{ __('Street') }}" value="{{ auth()->user()->street }}" required>

                    @if ($errors->has('street'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-div zip">
                    <input id="zip" type="number"
                           class="form-input {{ $errors->has('zip') ? ' is-invalid' : '' }}"
                           name="zip" placeholder="{{ __('Zip') }}" value="{{ auth()->user()->zip }}" required>

                    @if ($errors->has('zip'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="mb-5 ml-4">
                    <span class="font-14">{{__('Invoice to be sent')}}</span>
                    <div class="d-flex flex-wrap">
                        <div class="form-checkbox big mr-4 mt-4">
                            <input type="checkbox" id="to_weichlein">
                            <label for="to_weichlein">{{__('To Weichlein')}}</label>
                        </div>
                        <div class="form-checkbox big mt-4">
                            <input type="checkbox" id="to_client">
                            <label for="to_client">{{__('To the client')}}</label>
                        </div>
                    </div>
                </div>
                <div class="form-div email">
                    <input id="email" type="email"
                           class="form-input {{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" placeholder="{{ __('Email') }}" value="{{ auth()->user()->email }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-div phone">
                    <input id="phone" type="number"
                           class="form-input {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                           name="phone" placeholder="{{ __('Phone') }}" value="{{ auth()->user()->phone}}" required>

                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
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

