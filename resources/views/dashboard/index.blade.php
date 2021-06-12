@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Dashboard')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="#" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1>{{__('Welcome to dashboard')}}</h1>
            </div>
        </div>
    </div>
@endsection
