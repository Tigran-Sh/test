@extends('dashboard.layouts.app')
@section('content')
    <div class="subheader flex-wrap">
        <div class="subheader-left pt-2 pb-2">
            <h3 class="subheader-left-title">{{__('Edit Extra Service')}}</h3>
            <span class="subheader-left-separator"></span>

            <div class="subheader-breadcrumbs">
                <a href="{{route('dashboard.index')}}" class="breadcrumbs-link"><i class="flaticon2-shelter"></i></a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('extra_services.index')}}" class="breadcrumbs-link">{{__('Extra Services')}}</a>
                <span class="breadcrumbs-separator-dot"></span>
                <a href="{{route('extra_services.edit', $extra_service->id)}}" class="breadcrumbs-link">{{__('Edit Extra Service')}}</a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('Edit Extra Service')}}</h3>
                </div>
                <div class="float-right">
                    <img data-toggle="modal" data-target="#exampleModal" data-user="{{ $contact }}"
                         src="/img/profile-user.svg" alt="">
                </div>
                <!-- Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                     aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $contact->full_name }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i aria-hidden="true" class="ki ki-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><b>Email: </b>{{ $contact->email }}</p>
                                <p><b>Phone: </b>{{ $contact->phone }}</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-primary font-weight-bold"
                                        data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {!! Form::model($extra_service, [
                        'method' => 'PATCH',
                        'route' => [ "extra_services.update", $extra_service->id],
                        'files' => true
                     ]) !!}
                @include('dashboard.extra_services.parts._form')
                <div class="text-right">
                    <button type="submit" class="btn btn-primary legitRipple">{{__('Update')}}<i class="icon-floppy-disk ml-2"></i></button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection

