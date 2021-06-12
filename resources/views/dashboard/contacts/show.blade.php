@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Show Contact')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('contacts.index')}}" class="breadcrumbs-link">{{__('Contacts')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('contacts.show', $contact->id)}}" class="breadcrumbs-link">{{__('Show Contact')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Show Contact')}}</h3>
                </div>
            </div>
            <div class="card-body">
                <p><b>{{__('ID:')}}</b> {{$contact->id}}</p>
                <p><b>{{__('Name:')}}</b> {{$contact->name}}</p>
                <p><b>{{__('Website:')}}</b> @if($contact->website) <a href="{{$contact->website}}" target="_blank">{{$contact->website}}</a> @endif</p>
                <p><b>{{__('Email:')}}</b> {{$contact->email}}</p>
                <p><b>{{__('Phone:')}}</b> {{$contact->phone}}</p>
                <p><b>{{__('Fax:')}}</b> {{$contact->fax}}</p>
                <p><b>{{__('Zip:')}}</b> {{$contact->zip}}</p>
                <p><b>{{__('City:')}}</b> {{$contact->city}}</p>
                <p><b>{{__('Street:')}}</b> {{$contact->street}}</p>
                <p><b>{{__('House:')}}</b> {{$contact->house}}</p>
                <p><b>{{__('Created at:')}}</b> {{$contact->created_at}}</p>
            </div>
        </div>
    </div>

@endsection

