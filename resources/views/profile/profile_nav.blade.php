<nav class="profile-menu">
    <a class="open-simul-filter">
        <img src="/img/back.svg" alt="back" title="back" width="25"></a>
    @if(auth()->user()->company)
    <form class="user-profile-block text-center" method="POST" id="image_form" enctype="multipart/form-data" action="{{route('profile.image')}}">
        @csrf
        <label class="profile-image" style="cursor: pointer">
            <img src="{{auth()->user()->company->thumb}}" id="item-img-output"
                 alt="social-media" title="social-media" class="prof-img">
            <img src="/img/edit.svg" alt="" class="edit">
            <input type="file" name="image" id="image_input" style="display: none">
        </label>
    </form>
    @endif
    <div class="profile-menu-links list-unstyled p-0">
        @if(!\Illuminate\Support\Facades\Auth::user()->should_change_password)
        <a class="nav-item @if(Request::is('*/profile')) active @endif" href="{{route('profile.index')}}">
              <span>
          <img src="/img/profile-user.svg" alt="user">
              </span>
            <span> {{__('Personal Information')}}</span>
        </a>

        <a class="nav-item @if(Request::is('*/profile/bookings*')) active @endif" href="{{route('profile.bookings.index')}}">
              <span>
            <img src="/img/meeting.svg" alt="question">
                    </span>
            <span>{{__('My Meetings')}} </span>
        </a>

        <a class="nav-item @if(Request::is('*/profile/notifications*')) active @endif" href="{{route('profile.notifications')}}">
              <span>
                 <img src="/img/notification.svg" alt="notification">
              </span>
            <span>{{__('Notification')}}</span>
        </a>
        <a class="nav-item @if(Request::is('*/profile/password*')) active @endif" href="{{route('profile.password')}}">
              <span>
         <img src="/img/padlock.svg" alt="padlock">
              </span>
            <span>{{__('Change Password')}}</span>
        </a>
        @else

            <a class="nav-item @if(Request::is('*/profile/password*')) active @endif" href="{{route('profile.password')}}">
              <span>
         <img src="/img/padlock.svg" alt="padlock">
              </span>
                <span>{{__('Change Password')}}</span>
            </a>
        @endif

        <a class="nav-item " href="#" onclick="$(this).next().submit()">
              <span>
                <img src="/img/logout.svg" alt="">
              </span>
            <span>{{__('Login Out')}}</span>
        </a>
        <form action="{{route('logout')}}" method="POST">@csrf</form>

    </div>
</nav>

@section('before_scripts')
    <script>
        $('#image_input').change(function (){
           $('#image_form').submit();
        })
    </script>
@endsection
