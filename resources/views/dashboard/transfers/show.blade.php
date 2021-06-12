@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Show Transfer')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('transfers.index')}}" class="breadcrumbs-link">{{__('Transfers')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('transfers.show', $transfer->id)}}" class="breadcrumbs-link">{{__('Show Transfer')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Show Transfer')}}</h3>
                </div>
            </div>
            <div class="card-body">
                <p><b>{{__('ID:')}}</b> {{$transfer->id}}</p>
                <p><b>{{__('Type:')}}</b> {{$transfer->type->name ?? ''}}</p>
                <p><b>{{__('Destination:')}}</b> {{$transfer->destination->name ?? ''}}</p>
                <p><b>{{__('Contact:')}}</b> {{$transfer->user->full_name ?? ''}}</p>
                <p><b>{{__('Address:')}}</b> {{$transfer->address}}</p>
                <p><b>{{__('Start Longitude:')}}</b> {{$transfer->start_longitude}}</p>
                <p><b>{{__('Start Latitude:')}}</b> {{$transfer->end_latitude}}</p>
                <p><b>{{__('End Longitude:')}}</b> {{$transfer->end_longitude}}</p>
                <p><b>{{__('End Latitude:')}}</b> {{$transfer->end_latitude}}</p>
                <p><b>{{__('Maximum:')}}</b> {{$transfer->maximum}}</p>
                <p><b>{{__('Minimum:')}}</b> {{$transfer->minimum}}</p>
                <p><b>{{__('Price Per KM:')}}</b> {{$transfer->price_per_km}}</p>
                <p><b>{{__('Car size:')}}</b> {{$transfer->car_size}}</p>
                <p><b>{{__('Created at:')}}</b> {{$transfer->created_at}}</p>
            </div>
        </div>
    </div>

@endsection

