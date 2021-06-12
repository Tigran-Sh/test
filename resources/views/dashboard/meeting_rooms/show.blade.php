@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Show Meeting Room')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('meeting_rooms.index')}}" class="breadcrumbs-link">{{__('Meeting Rooms')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('meeting_rooms.show', $meeting_room->id)}}" class="breadcrumbs-link">{{__('Show Meeting Room')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Show Meeting Room')}}</h3>
                </div>
            </div>
            <div class="card-body">
                <p><b>{{__('ID:')}}</b> {{$meeting_room->id}}</p>
                <p><b>{{__('Name:')}}</b> {{$meeting_room->name}}</p>
                <p><b>{{__('Hotel:')}}</b> {{$meeting_room->hotel->name ?? ''}}</p>
                <p><b>{{__('Size:')}}</b> {{$meeting_room->size}}</p>
                <p><b>{{__('Price Per Person:')}}</b> {{$meeting_room->price_per_person}} €</p>
                <p><b>{{__('Fee:')}}</b> {{$meeting_room->fee}} €</p>
                <p><b>{{__('Created at:')}}</b> {{$meeting_room->created_at}}</p>
            </div>
        </div>
    </div>

@endsection

