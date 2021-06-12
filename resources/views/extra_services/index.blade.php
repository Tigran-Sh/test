@extends('layouts.app')
@section('content')
    <section class="meeting-packages">
        <h2 class="title-h3">{{__('Additional Services')}}</h2>
        <h6 class="subtitle">{{__('The most beautiful and comfortable packages')}}</h6>
        <div class="categories d-flex flex-wrap align-items-center justify-content-end">
            <a href="{{route('extra_services')}}" @if(!request()->get('type')) class="active" @endif>{{__('All')}}</a>
            @foreach($types as $type)
            <a href="{{route('extra_services', ['type' => $type->id])}}" @if(request()->get('type') == $type->id) class="active" @endif>{{$type->data->name}}</a>
            @endforeach
        </div>
        <div class="d-flex flex-wrap packages">
            @foreach($extra_services as $extra_service)
                <div class="package-box service">
                <a href="{{route('extra_service', $extra_service->id)}}">
                    <div class="position-relative">
                        <img src="{{$extra_service->thumb}}" alt="{{$extra_service->name}}" class="package-image">
                    </div>

                    <div class="package-text">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="title mb-0">{{$extra_service->data->name}}</h4>
                            <span class="price">€ {{$extra_service->price->price}}</span>
                        </div>

                        <div class="description">
                            {{$extra_service->data->description}}
                        </div>
                        <div class="text-center">
                            <a href="{{route('extra_service', $extra_service->id)}}" class="btn-yellow btn-yellow-outline">{{__('More details')}}</a>
                        </div>
                    </div>
                </a>

            </div>
            @endforeach
        </div>
    </section>
    <section class="gray-bg">
        @include('layouts.parts._testimonials')
    </section>

@endsection


