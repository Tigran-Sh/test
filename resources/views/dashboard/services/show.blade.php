@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Show Service')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('services.index')}}" class="breadcrumbs-link">{{__('Services')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('services.show', $service->id)}}" class="breadcrumbs-link">{{__('Show Service')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Show Service')}}</h3>
                </div>
            </div>
            <div class="card-body">
                <p><b>{{__('ID:')}}</b> {{$service->id}}</p>
                <p><b>{{__('Name:')}}</b> {{$service->name}}</p>
                <p><b>{{__('Hotel:')}}</b> {{$service->hotel->name ?? ''}}</p>
                <p><b>{{__('Contact:')}}</b> {{$service->user->name ?? ''}}</p>
                <p><b>{{__('Longitude:')}}</b> {{$service->longitude}}</p>
                <p><b>{{__('Latitude:')}}</b> {{$service->latitude}}</p>
                <p><b>{{__('Duration:')}}</b> {{$service->duration}}</p>
                <p><b>{{__('Address:')}}</b> {{$service->address}}</p>
                <p><b>{{__('Created at:')}}</b> {{$service->created_at}}</p>
            </div>
        </div>
    </div>

@endsection

