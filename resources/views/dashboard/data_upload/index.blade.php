@extends('dashboard.layouts.app')
@section('content')

    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Bulk Insert')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>

                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('contacts.index')}}" class="breadcrumbs-link">{{__('Bulk Insert')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Create Destination')}}</h3>
                </div>
            </div>
            <div class="card-body">
                <div class="col-4">
                    {!! Form::open(['route' => "excel.upload", 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                    @include('dashboard.data_upload.parts._form')
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary legitRipple">{{__('Upload')}}<i
                            class="icon-floppy-disk ml-2"></i></button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection


