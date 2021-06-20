@extends('layouts.app')
@section('content')
    <section class="d-flex flex-wrap login-register">
        <div class="left-side">
            <div class="left-side-content" style="line-height: 1.7">
                <div class="text-center">
                    <p>
                    <h4 class="title-h5 mb-2">{{__('Geschäftsführerin') }}</h4>
                    {{__('Marina Parra') }}
                    </p><br>
                    <p>
                        {{__('Meeteam Collection,') }}<br>
                        {{__('ein Subunternehmer der Weichlein Reisebüro GmbH') }}
                    </p>
                    <p class="mb-4">
                        {{__('Baierbrunner Str. 3') }}<br>
                        {{__('81379 München, Deutschland') }}<br>
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="/img/phone.svg" alt="phone" class="mr-3">
                        <a class="text-dark" href="tel:+49 89 85636 632">{{__('Tel. +49 89 85636 632') }}</a>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="/img/fax.svg" alt="phone" class="mr-3">
                        <a class="text-dark" href="tel:+49 89 85 636 636">{{__('Fax. +49 89 85 636 636') }}</a>

                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="/img/email.svg" alt="email" class="mr-3">
                        <a class="text-dark" href="mailto:info@meeteam.de">{{__('info@meeteam.de') }}</a>
                    </div>
                    {{__('meeteam.de') }}
                    </p>
                    <p>
                    <h4 class="title-h5 mb-2"> {{__(' Registereintrag') }}</h4>
                    {{__(' Eintragung im Handelsregister') }}<br>
                    {{__('Registergericht: München, Deutschland') }}<br>
                    {{__(' Registernummer: HRB64796') }}<br>
                    {{__('VAT-ID: DE129491633') }}
                    </p>

                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="right-side-content pt-3">
                <h2 class="title-h3 mb-2">{{ __('Contact Us') }}</h2>
                <h3 class="subtitle mb-4">{{__('Contact us text')}}</h3>
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
                    <div class="form-div subject">
                        <input id="subject" type="text" placeholder="{{ __('Subject') }}"
                               class="form-input form-input-bordered {{ $errors->has('subject') ? ' is-invalid' : '' }}"
                               name="subject" required>

                        @if ($errors->has('subject'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                        @endif

                    </div>


                    <div class="form-div message mb-0">
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
