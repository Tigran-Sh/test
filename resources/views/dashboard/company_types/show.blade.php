@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Show Company Type')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('company_types.index')}}" class="breadcrumbs-link">{{__('Company Types')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('company_types.show', $company_type->id)}}" class="breadcrumbs-link">{{__('Show Company Type')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Show Company Type')}}</h3>
                </div>
            </div>
            <div class="card-body">
                <p><b>{{__('ID:')}}</b> {{$company_type->id}}</p>
                <p><b>{{__('Name:')}}</b> {{$company_type->name}}</p>
                <p><b>{{__('Created at:')}}</b> {{$company_type->created_at}}</p>
            </div>
        </div>
    </div>

@endsection

