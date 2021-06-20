@extends('layouts.app')

@section('content')
    <section class="home-header position-relative">
        <img src="/img/main.jpeg" alt="meeteam" class="absolute-image">
        <div class="home-header-content">
            <h1 class="text-center">{{__('Book your Event Now')}}</h1>
            <form action="{{route('packages')}}" method="GET" class="d-flex home-header-form align-items-center">
                <div class="region">
                    <select name="region_id">
                        <option selected="true" disabled="disabled">{{__('Region')}}</option>
                        @foreach($regions as $region)
                            <option value="{{$region->id}}">{{$region->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="guests">
                    <div class="dropdown h-100 keep-open">
                        <button
                            class="h-100 dropdown-toggle border-0 bg-transparent text-left w-100 d-flex justify-content-between align-items-center"
                            type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <span>{{__('Guests')}}</span>
                            <input type="number" name="count" readonly class="guests-count" value="">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <div class="dropdown-item d-flex align-items-center justify-content-between">
                                <div>
                                    <img src="/img/ez.svg" alt="EZ"> EZ
                                </div>
                                <div>
                                    <button type="button" class="sub-guest border-0 bg-transparent">
                                        <img src="/img/minus.svg" alt="" width="21">
                                    </button>
                                    <input type="number" value="0" class="text-center guest-number guest-number-ez">
                                    <button type="button" class="add-guest border-0 bg-transparent">
                                        <img src="/img/plus.svg" alt="" width="20">
                                    </button>
                                </div>
                            </div>
                            <div class="dropdown-item d-flex align-items-center justify-content-between">
                                <div>
                                    <img src="/img/dz.svg" alt="EZ"> DZ
                                </div>
                                <div class="dz">
                                    <button type="button" class="sub-guest border-0 bg-transparent">
                                        <img src="/img/minus.svg" alt="" width="21">
                                    </button>
                                    <input type="number" value="0" class="text-center guest-number guest-number-dz">
                                    <button type="button" class="add-guest border-0 bg-transparent">
                                        <img src="/img/plus.svg" alt="" width="20">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="date">
                    <input type="text" name="date" class="daterange"  autocomplete="off">
                </div>
                <button type="submit" class="btn-yellow ml-auto mr-md-0 mr-auto">{{__('Next')}}</button>
            </form>
        </div>

    </section>

    <section class="home-packages">
        <div class="text-right title-box">
            <h2 class="title-h2">{{__('Meeting Packages')}}</h2>
            <h6 class="subtitle">{{__('The most beautiful and comfortable packages')}}</h6>
            <a href="{{route('packages')}}" class="btn-yellow">{{__('All packages')}}</a>
        </div>
        <div class="home-packages-mansory">
            @foreach($packages as $package)
                <div class="home-packages-mansory-item">
                    <img src="{{$package->thumb}}" alt="{{$package->name}}">
                    <div class="position-relative">
                        <div class="package-text">
                            <h4>{{$package->data->name}}</h4>
                            <p>{{$package->data->description}}</p>
                            <div class="text-right">
                                <a href="{{route('package', $package->id)}}" class="yellow-text">{{__('Read more')}}</a>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="home-services">
        <div class="home-services-content d-flex align-items-start justify-content-between flex-md-row flex-column">
            <div class="left-side mb-md-0 mb-sm-4">
                <div>
                    <h2 class="title-h2 text-white mb-0">{{__('Additional Services')}}</h2>
                    <h6 class="subtitle">{{__('The additional comfortable packages')}}</h6>
                </div>
                <div
                    class="w-100 d-flex align-items-start justify-content-between flex-sm-row flex-sm-row flex-column justify-content-between">
                    <div class="home-services-width">
                        @foreach($extra_service_types as $item)
                            <a href="{{route('extra_services', ['type' => $item->id])}}"
                               class="white-link">{{$item->name}}</a>
                        @endforeach
                        <p>{{__('Additional services home page first text')}}</p>
                        <p>{{__('Additional services home page second text')}}</p>
                        <a href="{{route('extra_services')}}" class="btn-yellow">{{__('Services')}}</a>
                    </div>
                    <div class="home-service-box small-box">
                        @if(isset($extra_service_types[0]))
                            <a href="{{route('extra_services', ['type' => $extra_service_types[0]->id])}}">
                                <img
                                    src="{{$extra_service_types[0]->thumb}}"
                                    alt="{{$extra_service_types[0]->name}}">
                                <div class="title">
                                    {{$extra_service_types[0]->data->name}}
                                </div>
                            </a>
                        @endif
                    </div>

                </div>
            </div>
            <div class="right-side d-md-block d-flex flex-sm-row flex-column flex-wrap">
                @foreach($extra_service_types as $type)
                    @if(!$loop->first)
                        <div class="home-service-box big-box">
                            <a href="{{route('extra_services', ['type' => $type->id])}}">
                                <img
                                    src="{{$type->thumb}}"
                                    alt="{{$type->name}}">
                                <div class="title">
                                    {{$type->data->name}}
                                </div>
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </section>
    <section class="home-cities">
        <h2 class="title-h2 text-center mb-0">{{__('Cities')}}</h2>
        <h6 class="subtitle text-center">{{__('The most beautiful cities in Germany')}}</h6>
        <div class="d-flex flex-wrap cities justify-content-center">
            @foreach($regions as $region)
                <a href="{{route('packages')}}?region_id={{$region->id}}">{{$region->name}}</a>
            @endforeach
        </div>
        <div class="d-flex justify-content-between flex-sm-row flex-column flex-wrap">
            @foreach($regions as $region)
                <div class="city-box">
                    <a href="{{route('packages')}}?region_id={{$region->id}}">
                        <img src="{{$region->image}}" alt=" {{$region->name}}">
                        <div class="hover-text">
                            {{$region->name}}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    @include('layouts.parts._testimonials')
@endsection


