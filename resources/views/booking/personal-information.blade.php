@extends('layouts.app')
@section('head')
    <style>
        header {
            border-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <section class="gray-bg d-flex flex-wrap">

        <div class="gray-left-side">
            <div class="gray-left-side-content w-100">
            <div class="open-mobile-info d-md-none text-right mb-3">
                <img src="/img/info-icon.svg" alt="" width="25">
            </div>

                <h2 class="title-h3">Personal Information</h2>
                <h6 class="subtitle mb-5">Please add your personal information</h6>
                <form action="" class="form-max-width">
                    @csrf
                    <div class="form-div username">
                        <input id="name" type="text"
                               class="form-input {{ $errors->has('name') ? ' is-invalid' : '' }}"
                               name="name" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-div username">
                        <input id="company_name" type="text"
                               class="form-input {{ $errors->has('company_name') ? ' is-invalid' : '' }}"
                               name="company_name" placeholder="{{ __('Company name') }}"
                               value="{{ old('company_name') }}" required>

                        @if ($errors->has('company_name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-div email">
                        <input id="email" type="email"
                               class="form-input {{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-div phone">
                        <input id="phone" type="phone"
                               class="form-input {{ $errors->has('phone') ? ' is-invalid' : '' }}"
                               name="phone" placeholder="{{ __('Phone') }}" value="{{ old('phone') }}" required>

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <button type="submit" class="btn-yellow">Send</button>
                </form>
            </div>
        </div>

        <div class="sidebar">
            <img src="/img/cancel.svg" alt="" class="close-btn">
            <div class="sidebar-content">
                <a href="#" class="text-white d-flex align-items-center mb-4">
                    <img src="/img/date.svg" alt="" class="mr-2">Calendar</a>
                <div class="sidebar-info">
                    <h6 class="title">My choosed package</h6>
                    <div class="d-flex align-items-start sidebar-info-div">
                        <span>Type</span>
                        <span>Sustainability</span>
                    </div>
                    <div class="d-flex align-items-start sidebar-info-div">
                        <span>Price</span>
                        <span>€ 210</span>
                    </div>
                    <div class="d-flex align-items-start sidebar-info-div">
                        <span>Overnightstay</span>
                        <span>15.10.2019</span>
                    </div>
                    <div class="d-flex align-items-start sidebar-info-div">
                        <span>Meetingday</span>
                        <span>16.10.2019</span>
                    </div>
                    <div class="d-flex align-items-start sidebar-info-div">
                        <span>Beachtour</span>
                        <span>16.10.2019</span>
                    </div>

                </div>
                <div class="sidebar-info">
                    <h6 class="title">My choosed hotels (1)</h6>
                    <div class="d-flex align-items-start sidebar-info-div">
                        <span>Name</span>
                        <span>Riu Plaza Berlin</span>
                    </div>
                    <div class="d-flex align-items-start sidebar-info-div">
                        <span>Stars</span>
                        <span class="stars mb-0">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                        </span>
                    </div>
                    <div class="d-flex align-items-start sidebar-info-div">
                        <span>Location</span>
                        <span>Martin-Luther-Str. 1, 10777 Berlin, Germany</span>
                    </div>

                </div>
                <div class="sidebar-info border-bottom-0">
                    <div class="d-flex align-items-start sidebar-info-div">
                        <span>Name</span>
                        <span>Riu Plaza Berlin</span>
                    </div>
                    <div class="d-flex align-items-start sidebar-info-div">
                        <span>Stars</span>
                        <span class="stars mb-0">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                        </span>
                    </div>
                    <div class="d-flex align-items-start sidebar-info-div">
                        <span>Location</span>
                        <span>Martin-Luther-Str. 1, 10777 Berlin, Germany</span>
                    </div>

                </div>

            </div>
        </div>

    </section>

@endsection


