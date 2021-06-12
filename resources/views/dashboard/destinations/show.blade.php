@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Show Destination')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('destinations.index')}}" class="breadcrumbs-link">{{__('Destinations')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('destinations.show', $destination->id)}}" class="breadcrumbs-link">{{__('Show Destination')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Show Destination')}}</h3>
                </div>
            </div>
            <div class="card-body">
                <p><b>{{__('ID:')}}</b> {{$destination->id}}</p>
                <p><b>{{__('Name:')}}</b> {{$destination->name}}</p>
                <p><b>{{__('Region:')}}</b> {{$destination->region->name ?? ''}}</p>
                <p><b>{{__('Longitude:')}}</b> {{$destination->longitude}}</p>
                <p><b>{{__('Latitude:')}}</b> {{$destination->latitude}}</p>
                <p><b>{{__('Created at:')}}</b> {{$destination->created_at}}</p>
            </div>
        </div>
    </div>

@endsection

