@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Edit Extra Service Type')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('extra_service_types.index')}}" class="breadcrumbs-link">{{__('Extra Service Types')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('extra_service_types.edit', $extra_service_type->id)}}" class="breadcrumbs-link">{{__('Edit Extra Service Type')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Edit Extra Service Type')}}</h3>
                </div>
            </div>
            <div class="card-body">
                {!! Form::model($extra_service_type, [
                        'method' => 'PATCH',
                        'route' => [ "extra_service_types.update", $extra_service_type->id]
                     ]) !!}
                @include('dashboard.extra_service_types.parts._form')
                <div class="text-right">
                    <button type="submit" class="btn btn-primary legitRipple">{{__('Update')}}<i class="icon-floppy-disk ml-2"></i></button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

