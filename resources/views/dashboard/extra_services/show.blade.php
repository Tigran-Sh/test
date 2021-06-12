@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Show Extra Service')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('extra_services.index')}}" class="breadcrumbs-link">{{__('Extra Services')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('extra_services.show', $extra_service->id)}}" class="breadcrumbs-link">{{__('Show Extra Service')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Show Extra Service')}}</h3>
                </div>
            </div>
            <div class="card-body">
                <p><b>{{__('ID:')}}</b> {{$extra_service->id}}</p>
                <p><b>{{__('Name:')}}</b> {{$extra_service->name}}</p>
                <p><b>{{__('Type:')}}</b> {{$extra_service->type->name ?? ''}}</p>
                <p><b>{{__('Destination:')}}</b> {{$extra_service->destination->name ?? ''}}</p>
                <p><b>{{__('Contact:')}}</b> {{$extra_service->user->name ?? ''}}</p>
                <p><b>{{__('Longitude:')}}</b> {{$extra_service->longitude}}</p>
                <p><b>{{__('Latitude:')}}</b> {{$extra_service->latitude}}</p>
                <p><b>{{__('Duration:')}}</b> {{$extra_service->duration}}</p>
                <p><b>{{__('Address:')}}</b> {{$extra_service->address}}</p>
                <p><b>{{__('Created at:')}}</b> {{$extra_service->created_at}}</p>
            </div>
        </div>
    </div>

@endsection

