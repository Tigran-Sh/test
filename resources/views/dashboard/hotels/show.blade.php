@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Show Hotel')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('hotels.index')}}" class="breadcrumbs-link">{{__('Hotels')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('hotels.show', $hotel->id)}}" class="breadcrumbs-link">{{__('Show Hotel')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Show Hotel')}}</h3>
                </div>
            </div>
            <div class="card-body">
                <p><b>{{__('ID:')}}</b> {{$hotel->id}}</p>
                <p><b>{{__('Name:')}}</b> {{$hotel->name}}</p>
                <p><b>{{__('Status:')}}</b> {{$hotel->status}}</p>
                <p><b>{{__('Destination:')}}</b> {{$hotel->destination->name ?? ''}}</p>
                <p><b>{{__('Longitude:')}}</b> {{$hotel->longitude}}</p>
                <p><b>{{__('Latitude:')}}</b> {{$hotel->latitude}}</p>
                <p><b>{{__('Stars:')}}</b> {{$hotel->stars}}</p>
                <p><b>{{__('Max Room:')}}</b> {{$hotel->max_room}}</p>
                <p><b>{{__('Created at:')}}</b> {{$hotel->created_at}}</p>
            </div>
        </div>
    </div>

@endsection

