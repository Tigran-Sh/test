@extends('layouts.app')
@section('content')
    <section class="d-flex flex-wrap login-register">
        <div class="left-side">
            <div class="left-side-content">
                <h2 class="title-h3">{{ __('Contact Us') }}</h2>
                <h3 class="subtitle">{{__('Contact us text')}}</h3>
                <div class="d-flex align-items-start mb-4">
                    <img src="/img/phone.svg" alt="phone" class="mr-3">
                    <a href="tel:+123456789" class="text-dark">{{__('+000 000 000 000')}}</a>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <img src="/img/email.svg" alt="email" class="mr-3">
                    <a href="mailto:{{__('meeteam@meeteam.meeteam')}}"
                       class="text-dark">{{__('meeteam@meeteam.meeteam')}}</a>
                </div>
                <div class="d-flex align-items-start mb-4">
                    <img src="/img/map.svg" alt="map" class="mr-3">
                    <span class="text-dark">{{__('meeteam address')}}</span>
                </div>

            </div>
        </div>
        <div class="right-side">
            <div class="right-side-content pt-5">
                <form method="POST" action="{{route('pages.contact.submit')}}">
                    @csrf
                    <div class="form-div username">
                        <input id="name" type="text" placeholder="{{ __('Name') }}"
                               class="form-input form-input-bordered {{ $errors->has('name') ? ' is-invalid' : '' }}"
                               name="name" required>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-div email">
                        <input id="email" type="email" placeholder="{{ __('Email address') }}"
                               class="form-input form-input-bordered {{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif

                    </div>
                    <div class="form-div email">
                        <input id="subject" type="text" placeholder="{{ __('Subject') }}"
                               class="form-input form-input-bordered {{ $errors->has('subject') ? ' is-invalid' : '' }}"
                               name="subject" required>

                        @if ($errors->has('subject'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                        @endif

                    </div>


                    <div class="form-div email mb-0">
                        <textarea id="message" placeholder="{{ __('Message') }}"
                                  class="form-input form-input-bordered textarea {{ $errors->has('message') ? ' is-invalid' : '' }}"
                                  name="message" required style="height: 100px" rows="3"></textarea>

                        @if ($errors->has('message'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-checkbox  mr-4 mt-4">
                        <input type="checkbox" id="to_weichlein" required>
                        <label for="to_weichlein">
                            <span class="mr-1">{{__('I agree to the')}} </span>
                            <a href="/terms" class="yellow-text"> terms and conditions</a>
                        </label>
                    </div>
                    <button type="submit" class="btn-yellow">
                        {{ __('Submit') }}
                    </button>

                </form>
            </div>
        </div>
    </section>
@endsection
