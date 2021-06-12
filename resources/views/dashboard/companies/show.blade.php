@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Show Company')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('companies.index')}}" class="breadcrumbs-link">{{__('Companies')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('companies.show', $company->id)}}" class="breadcrumbs-link">{{__('Show Company')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Show Company')}}</h3>
                </div>
            </div>
            <div class="card-body">
                <p><b>{{__('ID:')}}</b> {{$company->id}}</p>
                <p><b>{{__('Name:')}}</b> {{$company->name}}</p>
                <p><b>{{__('Type:')}}</b> {{$company->type->name ?? ''}}</p>
                <p><b>{{__('Website:')}}</b> {{$company->website}}</p>
                <p><b>{{__('Email:')}}</b> {{$company->email}}</p>
                <p><b>{{__('Phone:')}}</b> {{$company->phone}}</p>
                <p><b>{{__('Fax:')}}</b> {{$company->fax}}</p>
                <p><b>{{__('Zip:')}}</b> {{$company->zip}}</p>
                <p><b>{{__('City:')}}</b> {{$company->city}}</p>
                <p><b>{{__('Street:')}}</b> {{$company->street}}</p>
                <p><b>{{__('House:')}}</b> {{$company->house}}</p>
                <p><b>{{__('Created at:')}}</b> {{$company->created_at}}</p>
            </div>
        </div>
    </div>

@endsection

