<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{mix('/css/dashboard/dashboard.css')}}" rel="stylesheet">
    <link href="/css/dashboard/toastr.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-tagsinput.css') }}">
    @yield('head')

    <script src="{{ mix('/js/dashboard/dashboard.js') }}"></script>
    <script src="/js/dashboard/toastr.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
    <script src="/js/dashboard/ckeditor/ckeditor.js"></script>
</head>
<body>

<main class="d-flex page">
    <div class="left-menu">
        <div class="brand d-flex align-items-center">
            <a href="{{route('home')}}" class="brand-logo">
                <img alt="Logo" src="/img/meeteam.svg">
            </a>
            <button class="brand-toggle">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#494b74" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)"></path>
                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#494b74" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)"></path>
                    </g>
                </svg>
                </span>
            </button>
        </div>

       @include('dashboard.layouts._sidebar')

    </div>
    <div class="wrapper w-100 d-flex flex-column">

        <header class="header">
            <div class="d-flex justify-content-between align-items-center">
                <a href="#" class="brand-logo d-xl-none">
                    <img alt="Logo" src="/img/meeteam.svg" width="100">
                </a>
                <a href="#" class="notification-btn ml-auto position-relative dropdown-toggle"></a>
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-md-inline-block">{{auth()->user()->full_name}}</span>
                        <span class="flaticon-user ml-2"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="{{route('profile.index')}}">
                            <i class="flaticon2-user-1 mr-2"></i>
                            {{__('My Profile')}}
                        </a>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="flaticon-logout  mr-2"></i>
                            {{__('Logout')}}
                        </a>
                        <form id="logout-form" action="/{{m_locale()}}/logout" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>

                <button class="btn open-menu" type="button">
                    <i class="flaticon2-cross"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false">
                        <title>{{__('Menu')}}</title>
                        <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                    </svg>
                </button>
            </div>
        </header>

        <div class="content d-flex flex-column flex-column-fluid">

            @yield('content')

        </div>
    </div>
</main>
<script src="/js/dashboard/main.js" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
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

</body>

</html>
