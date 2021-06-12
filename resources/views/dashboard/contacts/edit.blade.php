@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Edit Contact')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('contacts.index')}}" class="breadcrumbs-link">{{__('Contacts')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('contacts.edit', $contact->id)}}" class="breadcrumbs-link">{{__('Edit Contact')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Edit Contact')}}</h3>
                </div>
            </div>
            <div class="card-body">
                {!! Form::model($contact, [
                        'method' => 'PATCH',
                        'route' => [ "contacts.update", $contact->id]
                     ]) !!}
                @include('dashboard.contacts.parts._form')
                <div class="text-right">
                    <button type="submit" class="btn btn-primary legitRipple">{{__('Update')}}<i class="icon-floppy-disk ml-2"></i></button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

