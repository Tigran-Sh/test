@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Edit Package')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('packages.index')}}" class="breadcrumbs-link">{{__('Packages')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('packages.edit', $package->id)}}" class="breadcrumbs-link">{{__('Edit Package')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Edit Package')}}</h3>
                </div>
            </div>
            <div class="card-body">
                {!! Form::model($package, [
                        'method' => 'PATCH',
                        'route' => [ "packages.update", $package->id],
                        'files' => true
                     ]) !!}
                @include('dashboard.packages.parts._form')
                <div class="text-right">
                    <button type="submit" class="btn btn-primary legitRipple">{{__('Update')}}<i class="icon-floppy-disk ml-2"></i></button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

