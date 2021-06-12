@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Edit Meeting Room')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('meeting_rooms.index')}}" class="breadcrumbs-link">{{__('Meeting Rooms')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('meeting_rooms.edit', $meeting_room->id)}}" class="breadcrumbs-link">{{__('Edit Meeting Room')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Edit Meeting Room')}}</h3>
                </div>
            </div>
            <div class="card-body">
                {!! Form::model($meeting_room, [
                        'method' => 'PATCH',
                        'route' => [ "meeting_rooms.update", $meeting_room->id]
                     ]) !!}
                @include('dashboard.meeting_rooms.parts._form')
                <div class="text-right">
                    <button type="submit" class="btn btn-primary legitRipple">{{__('Update')}}<i class="icon-floppy-disk ml-2"></i></button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

