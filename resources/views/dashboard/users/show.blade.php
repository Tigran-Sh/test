@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Show User')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('users.index')}}" class="breadcrumbs-link">{{__('Users')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('users.show', $user->id)}}" class="breadcrumbs-link">{{__('Show User')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Show User')}}</h3>
                </div>
            </div>
            <div class="card-body">
                <p><b>{{__('ID:')}}</b> {{$user->id}}</p>
                <p><b>{{__('Full Name:')}}</b> {{$user->full_name}}</p>
                <p><b>{{__('Email:')}}</b> {{$user->email}}</p>
                <p><b>{{__('Phone:')}}</b> {{$user->phone}}</p>
                <p><b>{{__('Company:')}}</b> {{$user->company->name ?? ''}}</p>
                <p><b>{{__('Created at:')}}</b> {{$user->created_at}}</p>
            </div>
        </div>
    </div>

@endsection

