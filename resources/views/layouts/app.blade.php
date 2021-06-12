<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{config('app.name')}}</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @if(request()->route()->getName() == 'home')
        <link href="{{ mix('css/home.css') }}" rel="stylesheet">
    @else
        <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    @endif
    <link href="/css/dashboard/toastr.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/daterangepicker.css"/>
    @yield('head')


</head>
<body>
<div id="app">
    <header>
        <nav class="navbar navbar-expand-xl meeteam-navbar">
            <a class="navbar-brand" href="/" aria-label="Meeteam Logo">
                <img src="/img/meeteam.svg" alt="Meeteam" class="logo-light">
                <img src="/img/meetem-logo-dark.svg" alt="Meeteam" class="logo-dark">
            </a>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <div class="dropdown navbar-dropdown">
                            <button class="dropdown-toggle nav-link" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('Packages')}}
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                @foreach($_package_types as $item)
                                    <a class="dropdown-item" href="{{route('packages', ['type' => $item->id])}}">{{ $item->data->name ?? $item->name }}</a>
                                @endforeach
                            </div>
                        </div>

                    </li>
                    <li class="nav-item">
                        <div class="dropdown navbar-dropdown">
                            <button class="dropdown-toggle nav-link" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('Additional Services')}}
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                @foreach($_extra_service_types as $item)
                                    <a class="dropdown-item" href="{{route('extra_services',  ['type' => $item->id])}}">{{$item->data->name}}</a>
                                @endforeach
                            </div>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a href="{{route('pages', 'about-us')}}" class="nav-link">  {{__('About us ')}} </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('pages.contact')}}" class="nav-link"> {{__('Contact')}} </a>
                    </li>
                    @guest
                        <li class="nav-item d-sm-none">
                            <a href="{{route('login')}}" class="nav-link bg-transparent"> {{__('Login')}} </a>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a href="{{route('register')}}" class="nav-link btn-yellow"> {{__('Register')}} </a>
                        </li>
                    @else
                        <div class="dropdown navbar-dropdown  d-sm-none">
                            <button class="dropdown-toggle nav-link" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{auth()->user()->full_name}}
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                @if(auth()->user()->role == 'admin')
                                    <a class="dropdown-item" href="{{route('dashboard.index')}}">{{__('Dashboard')}}</a>
                                @endif
                                <a class="dropdown-item" href="{{route('profile.index')}}">{{__('Profile')}}</a>
                                <a class="dropdown-item" href="#" onclick="$(this).next().submit()">{{__('Logout')}}</a>
                                <form action="{{route('logout')}}" method="POST">@csrf</form>
                            </div>
                        </div>
                    @endif

                </ul>
            </div>
            <div class="lang-notification">
                <a href="#" class="notification">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.766" height="20.164" viewBox="0 0 17.766 20.164">
                        <g transform="translate(-12.447 -7.92)">
                            <path
                                d="M29.68,22.188,28,20.149a.2.2,0,0,1-.045-.126V14.267a6.514,6.514,0,0,0-6.387-6.338A7.045,7.045,0,0,0,16.6,9.623a5.969,5.969,0,0,0-2.087,4.489v6.125a.2.2,0,0,1-.045.126l-1.489,1.825a1.773,1.773,0,0,0-.359,2.029,2.056,2.056,0,0,0,1.866,1.124H28.16a2.058,2.058,0,0,0,1.877-1.118,1.773,1.773,0,0,0-.356-2.034ZM28.772,23.7a.671.671,0,0,1-.622.377H14.487a.684.684,0,0,1-.612-.377.591.591,0,0,1,.117-.67l.05-.054,1.53-1.859a1.4,1.4,0,0,0,.3-.875V14.112a4.746,4.746,0,0,1,1.573-3.493A5.587,5.587,0,0,1,21.241,9.18H21.5a5.207,5.207,0,0,1,5.089,5.087v5.777a1.4,1.4,0,0,0,.322.888l1.7,2.06.045.046a.58.58,0,0,1,.123.678Z"
                                transform="translate(0)"/>
                            <path
                                d="M30.787,51.992a3.349,3.349,0,0,1-5,0,.628.628,0,0,1,.934-.837,2.093,2.093,0,0,0,3.127,0,.628.628,0,0,1,.934.837Z"
                                transform="translate(-6.988 -25.027)"/>
                        </g>
                    </svg>
                </a>
                @if(m_locale() == 'en')
                    <a href="{{ LaravelLocalization::getLocalizedURL('de', null, [], true) }}"
                       hreflang="de" class="lang"><img src="/img/de.svg" alt="germany"></a>
                @else
                    <a href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}"
                       hreflang="en" class="lang"><img src="/img/en.svg" alt="english"></a>
                @endif
            </div>
            <div class="d-sm-flex align-items-center d-none">
                @guest
                <a href="{{route('login')}}" class="nav-link bg-transparent mr-0 mb-0">{{__('Login')}}</a>
                <a href="{{route('register')}}" class="btn-yellow">{{__('Register')}}</a>
                    @else
                    <div class="dropdown navbar-dropdown">
                        <button class="dropdown-toggle nav-link mb-0" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="user-name">
                                   {{auth()->user()->full_name }}
                            </span>

                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            @if(auth()->user()->role == 'admin')
                            <a class="dropdown-item" href="{{route('dashboard.index')}}">{{__('Dashboard')}}</a>
                            @endif
                            <a class="dropdown-item" href="{{route('profile.index')}}">{{__('Profile')}}</a>
                            <a class="dropdown-item" href="#" onclick="$(this).next().submit()">{{__('Logout')}}</a>
                            <form action="{{route('logout')}}" method="POST">@csrf</form>
                        </div>
                    </div>
                    @endif
            </div>
            <button id="nav-icon" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>
    </header>
    @yield('content')
    <footer class="d-flex footer flex-md-row flex-column">
        <div class="footer-block footer-block-left">
            <div class="footer-block-content d-flex flex-column h-100">
                <div
                    class="w-100 d-flex align-items-sm-start justify-content-between flex-sm-row flex-column align-items-center text-sm-left text-center">
                    <div>
                        <a href="/" class="footer-logo"><img src="/img/footer-logo.svg" alt=""></a>
                        <p>{{__('meeteam slogan')}}</p>
                    </div>
                    <div>
                        <h5>{{__('About Us')}}</h5>
                        <ul class="list-unstyled">
                            <li><a href="{{route('packages')}}">{{__('Packages')}}</a></li>
                            <li><a href="{{route('extra_services')}}">{{__('Additional Services')}}</a></li>
                            <li><a href="{{route('pages', 'about-us')}}">{{__('About Us')}}</a></li>
                            <li><a href="{{route('pages.contact')}}">{{__('Contact')}}</a></li>
                        </ul>

                    </div>
                </div>
                <div class="copyright d-md-block d-none mt-auto">{{__('Copyright ©meeteam company. All rights reserved.')}} {{date('Y')}}</div>
            </div>
        </div>
        <div class="footer-block footer-block-right">
            <div class="footer-block-content">
                <div class="w-100 d-flex align-items-start justify-content-between flex-wrap">
                    <div>
                        <h5>{{__('Contact Us')}}</h5>
                        <div>
                            <h6>{{__('Phone')}}</h6>
                            <a href="tel:{{__('+000 000 000 000')}}">{{__('+000 000 000 000')}}</a>
                        </div>
                        <div>
                            <h6>{{__('Email')}}</h6>
                            <a href="mailto:{{__('meeteam@meeteam.meeteam')}}">{{__('meeteam@meeteam.meeteam')}}</a>
                        </div>
                        <div>
                            <h6>{{__('Address')}}</h6>
                            <a href="#" onclick="return false;">{{__('meeteam address')}}</a>
                        </div>
                    </div>
                    <div>
                        <h5>Follow us at:</h5>
                        <a href="#" target="_blank" class="social">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.393" height="24.393"
                                 viewBox="0 0 24.393 24.393" fill="#fff">
                                <path
                                    d="M53.2,43.156a12.2,12.2,0,1,0,12.2,12.2A12.2,12.2,0,0,0,53.2,43.156Zm3.527,12.2H54.29v8.2H51.01v-8.2H49.371V52.073H51V50.591a3.2,3.2,0,0,1,3.451-3.437l2.533.01v2.81h-1.84a.694.694,0,0,0-.725.788v1.311h2.606Z"
                                    transform="translate(-41 -43.156)"/>
                            </svg>
                        </a>

                        <a href="#" target="_blank" class="social">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24.392" height="24.392"
                                 viewBox="0 0 24.392 24.392" fill="#fff">
                                <path
                                    d="M20.4,23.087a3.038,3.038,0,1,1-3.085,3.037A3.062,3.062,0,0,1,20.4,23.087Zm0-1.215a4.253,4.253,0,1,0,4.319,4.252A4.286,4.286,0,0,0,20.4,21.872Zm4.453-1.022a1.215,1.215,0,1,0,1.234,1.215A1.215,1.215,0,0,0,24.848,20.85Zm-7.468-1.322h6.03a3.525,3.525,0,0,1,3.552,3.5v6.2a3.524,3.524,0,0,1-3.552,3.5h-6.03a3.524,3.524,0,0,1-3.552-3.5v-6.2a3.525,3.525,0,0,1,3.552-3.5Zm-.569-1.209a4.19,4.19,0,0,0-4.222,4.156v7.3a4.189,4.189,0,0,0,4.222,4.156h7.167A4.189,4.189,0,0,0,28.2,29.774v-7.3a4.189,4.189,0,0,0-4.222-4.156ZM20.4,13.928a12.2,12.2,0,1,1-12.2,12.2A12.2,12.2,0,0,1,20.4,13.928Z"
                                    transform="translate(-8.2 -13.928)" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="text-right privacy">
                    <a href="{{route('pages', 'terms-of-use')}}">{{__('Terms of Use')}} </a>
                    <a href="{{route('pages', 'privacy-policy')}}">{{__('Privacy Policy')}} </a>
                    <a href="{{route('pages', 'inprint')}}">{{__('Impressum')}} </a>
                </div>
                <div class="copyright d-md-none mt-3">{{__('Copyright ©meeteam company. All rights reserved.')}} {{date('Y')}}</div>
            </div>
        </div>
    </footer>
</div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="/js/dashboard/toastr.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/moment.js"></script>
<script type="text/javascript" src="/js/daterangepicker.js"></script>
<script>
    $('.add-guest').click(function () {
        var input = $(this).parent().find('input');
        var totalCount = $('.guests-count');
        +input.val(+input.val() + 1);
        input.change();
        if ($(this).parent().hasClass('dz')) {
            totalCount.val(+totalCount.val() + 2)
        } else {
            totalCount.val(+totalCount.val() + 1)
        }
    });

    $('.sub-guest').click(function () {
        var input = $(this).parent().find('input');
        var totalCount = $('.guests-count');
        if (+input.val() > 0) {
            +input.val(+input.val() - 1);
            input.change();
            if ($(this).parent().hasClass('dz')) {
                totalCount.val(+totalCount.val() - 2);
            } else {
                totalCount.val(+totalCount.val() - 1)
            }
        }
    })

    $('.guest-number').keyup(function () {
        $('.guests-count').val(+$('.guest-number-dz').val() * 2 + +$('.guest-number-ez').val())
    })

    $('.daterange').daterangepicker({
        "locale": {
            "format": "DD.MM.YYYY",
            "separator": "-",
            "firstDay": 1
        },
        "alwaysShowCalendars": true,
        "opens": "left",


    }).val('').attr("placeholder", '{{__('Check in - Check out')}}');
    $(document).on('click.bs.dropdown.data-api', '.keep-open', function (e) {
        e.stopPropagation();
    });

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    $(".open-simul-filter").click(function () {
        $(".profile-menu").toggleClass("open-filter");
    });

    $('.open-mobile-info').click(function () {
        $('.sidebar').addClass('opened')
    })

    $('.close-btn').click(function () {
        $('.sidebar').removeClass('opened')
    })
    $('.testimonial-image-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        centerMode: true,
        centerPadding: '0',
        asNavFor: '.testimonial-slider'
    });
    $('.testimonial-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.testimonial-image-slider',
        dots: true,
        arrows: false,
        focusOnSelect: true
    });

    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "showDuration": "500",
        "hideDuration": "1000",
        "timeOut": "5000"
    };

    @foreach (session('flash_notification', collect())->toArray() as $message)
    toastr.{{$message['level']}}('{!! $message['message'] !!}');
    @endforeach
</script>

@yield('scripts')
@yield('before_scripts')

</body>
</html>
