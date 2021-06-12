@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Edit Region')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('regions.index')}}" class="breadcrumbs-link">{{__('Regions')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('regions.edit', $region->id)}}" class="breadcrumbs-link">{{__('Edit Region')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Edit Region')}}</h3>
                </div>
            </div>
            <div class="card-body">
                {!! Form::model($region, [
                        'method' => 'PATCH',
                        'files' => true,
                        'route' => [ "regions.update", $region->id]
                     ]) !!}
                @include('dashboard.regions.parts._form')
                <div class="text-right">
                    <button type="submit" class="btn btn-primary legitRipple">{{__('Update')}}<i class="icon-floppy-disk ml-2"></i></button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

