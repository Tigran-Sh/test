@extends('layouts.app')
@section('content')
    <section class="meeting-packages">
        <form action="{{route('packages')}}" method="GET" class="d-flex home-header-form align-items-center">
            <div class="region">
                <select name="region_id">
                    <option value="">{{__('Region')}}</option>
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
                                <input type="number" value="0" class="text-center">
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
                                <input type="number" value="0" class="text-center">
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

        <h2 class="title-h3">{{__('Meeting Packages')}}</h2>
        <h6 class="subtitle">{{__('The most beautiful and comfortable packages')}}</h6>
        <div class="categories d-flex flex-wrap align-items-center justify-content-end">
            <a href="{{route('packages')}}" @if(!request()->get('type')) class="active" @endif>{{__('All')}}</a>
            @foreach($types as $type)
                <a href="{{route('packages', ['type' => $type->id])}}" @if(request()->get('type') == $type->id) class="active" @endif>{{$type->data->name}}</a>
            @endforeach
        </div>
        <div class="d-flex flex-wrap packages">
            @foreach($packages as $package)
            <div class="package-box package-box-hovered">
                <a href="{{route('package', $package->id)}}">
                    <div class="position-relative">
                        <img src="{{$package->thumb}}" alt="{{$package->name}}" class="package-image">
                        <a href="{{route('package', $package->id)}}" class="see-more yellow-text">{{__('See more')}}</a>
                    </div>

                    <div class="package-text">
                        <h4 class="title">{{$package->data->name}}</h4>
                        <div class="d-flex align-items-center">

                            <svg id="bed" xmlns="http://www.w3.org/2000/svg" width="17.183" height="15.561"
                                 viewBox="0 0 17.183 15.561">
                                <path id="Path_64" data-name="Path 64"
                                      d="M15.847,5.756v-2.6c0-.725-.416-1.737-2.4-2.444A15.024,15.024,0,0,0,8.592,0,15.025,15.025,0,0,0,3.735.712c-1.981.707-2.4,1.719-2.4,2.444v2.6A1.772,1.772,0,0,0,0,7.515v7.291a.719.719,0,0,0,.673.756h1.84a.719.719,0,0,0,.673-.756V13.53H14v1.276a.719.719,0,0,0,.673.756h1.84a.719.719,0,0,0,.673-.756V7.515a1.772,1.772,0,0,0-1.337-1.758ZM2.014,3.156c0-.9,1.206-1.464,1.926-1.721A14.412,14.412,0,0,1,8.592.759a14.412,14.412,0,0,1,4.653.676c.719.257,1.926.822,1.926,1.721V5.72h-.793V5.067a1.057,1.057,0,0,0-.99-1.112H10.424a1.057,1.057,0,0,0-.99,1.112V5.72H7.852V5.067a1.057,1.057,0,0,0-.99-1.112H3.9a1.057,1.057,0,0,0-.99,1.112V5.72h-.9Zm8.1,2.564V5.067a.34.34,0,0,1,.314-.353h2.964a.336.336,0,0,1,.314.353V5.72Zm-6.525,0V5.067A.336.336,0,0,1,3.9,4.714H6.862a.336.336,0,0,1,.314.353V5.72ZM.676,7.515a1.019,1.019,0,0,1,1-1.036H15.509a1.019,1.019,0,0,1,1,1.036v3.224H9.933a.382.382,0,0,0,0,.759h6.575v1.273H.676V11.5H7.252a.382.382,0,0,0,0-.759H.676ZM2.51,14.8H.676V13.53H2.51Zm12.164,0V13.53h1.834V14.8Zm0,0"
                                      transform="translate(0)"/>
                                <path id="Path_65" data-name="Path 65"
                                      d="M246.325,285.794h.006a.379.379,0,0,0,0-.759h-.006a.379.379,0,1,0,0,.759Zm0,0"
                                      transform="translate(-237.733 -274.296)"/>
                            </svg>

                            <span>{{__('One overnight stay')}}</span>

                        </div>
                        <div class="d-flex align-items-center">

                            <svg id="user_12_" data-name="user (12)" xmlns="http://www.w3.org/2000/svg" width="15.346"
                                 height="17.333"
                                 viewBox="0 0 15.346 17.333">
                                <path id="Path_1" data-name="Path 1"
                                      d="M91.649,8.35a4.717,4.717,0,0,0,3.265-1.223,3.9,3.9,0,0,0,0-5.9,4.969,4.969,0,0,0-6.529,0,3.9,3.9,0,0,0,0,5.9A4.719,4.719,0,0,0,91.649,8.35Zm-2.47-6.408a3.759,3.759,0,0,1,4.94,0,2.881,2.881,0,0,1,1.024,2.233,2.881,2.881,0,0,1-1.024,2.234,3.759,3.759,0,0,1-4.94,0,2.88,2.88,0,0,1-1.024-2.234,2.881,2.881,0,0,1,1.024-2.233Zm0,0"
                                      transform="translate(-84.085 0)"/>
                                <path id="Path_2" data-name="Path 2"
                                      d="M15.309,252.272a9.748,9.748,0,0,0-.149-1.1,8.219,8.219,0,0,0-.286-1.1,5.286,5.286,0,0,0-.481-1.027,3.909,3.909,0,0,0-.724-.89,3.227,3.227,0,0,0-1.041-.616,3.792,3.792,0,0,0-1.328-.227,1.4,1.4,0,0,0-.72.288c-.216.133-.468.286-.75.456a4.433,4.433,0,0,1-.971.4,3.988,3.988,0,0,1-2.374,0,4.419,4.419,0,0,1-.97-.4c-.279-.168-.532-.321-.751-.456a1.394,1.394,0,0,0-.72-.288,3.787,3.787,0,0,0-1.328.227,3.224,3.224,0,0,0-1.041.616,3.909,3.909,0,0,0-.724.889,5.3,5.3,0,0,0-.48,1.027,8.239,8.239,0,0,0-.286,1.1,9.68,9.68,0,0,0-.149,1.1C.012,252.6,0,252.948,0,253.3a2.793,2.793,0,0,0,.907,2.177,3.383,3.383,0,0,0,2.338.8H12.1a3.384,3.384,0,0,0,2.337-.8,2.792,2.792,0,0,0,.907-2.178c0-.349-.013-.694-.037-1.024ZM13.7,254.737a2.281,2.281,0,0,1-1.594.524H3.244a2.281,2.281,0,0,1-1.594-.523,1.821,1.821,0,0,1-.572-1.442c0-.325.011-.645.034-.953a8.732,8.732,0,0,1,.135-.986,7.267,7.267,0,0,1,.251-.971,4.311,4.311,0,0,1,.391-.835,2.9,2.9,0,0,1,.532-.657,2.142,2.142,0,0,1,.692-.406,2.614,2.614,0,0,1,.849-.154c.038.019.1.055.214.122.222.136.477.291.759.461a5.506,5.506,0,0,0,1.218.513,5.128,5.128,0,0,0,3.037,0,5.511,5.511,0,0,0,1.219-.513c.289-.174.537-.325.759-.461.109-.067.176-.1.214-.122a2.616,2.616,0,0,1,.849.154,2.145,2.145,0,0,1,.692.406,2.888,2.888,0,0,1,.532.658,4.3,4.3,0,0,1,.391.835,7.25,7.25,0,0,1,.251.971,8.8,8.8,0,0,1,.135.987h0c.023.307.034.627.035.953a1.821,1.821,0,0,1-.573,1.442Zm0,0"
                                      transform="translate(0 -238.944)"/>
                            </svg>

                            <span>{{count($package->hotel->meeting_rooms)}} {{__('Meeting Room')}}</span>

                        </div>
                        @if($package->hotel && $package->hotel->price->breakfast)
                        <div class="d-flex align-items-center">

                            <svg xmlns="http://www.w3.org/2000/svg" width="17.184" height="17.258"
                                 viewBox="0 0 17.184 17.258">
                                <g id="coffee-cup" transform="translate(-1)">
                                    <g id="Group_56" data-name="Group 56" transform="translate(1.212 6.574)">
                                        <g id="Group_55" data-name="Group 55">
                                            <path id="Path_53" data-name="Path 53"
                                                  d="M76.727,202.654H65.221a1.234,1.234,0,0,0-1.233,1.233v.822a7.788,7.788,0,0,0,4.227,6.94.411.411,0,1,0,.377-.731,6.968,6.968,0,0,1-3.782-6.21v-.822a.411.411,0,0,1,.411-.411H76.727a.411.411,0,0,1,.411.411v.822a6.965,6.965,0,0,1-3.783,6.209.411.411,0,0,0,.189.777.405.405,0,0,0,.188-.046,7.785,7.785,0,0,0,4.228-6.94v-.822A1.234,1.234,0,0,0,76.727,202.654Z"
                                                  transform="translate(-63.988 -202.654)"/>
                                        </g>
                                    </g>
                                    <g id="Group_58" data-name="Group 58" transform="translate(1 14.792)">
                                        <g id="Group_57" data-name="Group 57" transform="translate(0)">
                                            <path id="Path_54" data-name="Path 54"
                                                  d="M15.08,416.22a.337.337,0,0,0-.3-.254H.328a.337.337,0,0,0-.3.254.488.488,0,0,0,.071.448l.736.922a2.081,2.081,0,0,0,1.625.842H12.646a2.085,2.085,0,0,0,1.627-.842l.736-.922A.488.488,0,0,0,15.08,416.22Zm-1.272.789a1.487,1.487,0,0,1-1.161.6H2.458a1.487,1.487,0,0,1-1.161-.6l-.176-.22H13.984Z"
                                                  transform="translate(0 -415.966)"/>
                                        </g>
                                    </g>
                                    <g id="Group_60" data-name="Group 60" transform="translate(12.139 8.216)">
                                        <g id="Group_59" data-name="Group 59">
                                            <path id="Path_55" data-name="Path 55"
                                                  d="M360.342,245.571c-1.107-.712-2.876.061-3.074.15a.411.411,0,0,0,.341.749c.4-.18,1.667-.607,2.288-.206a1.168,1.168,0,0,1,.417,1.065c0,1.645-3.319,2.64-4.6,2.885l-.291.057a.411.411,0,0,0,.079.814.381.381,0,0,0,.08-.008l.288-.057c.215-.041,5.266-1.031,5.266-3.691A1.938,1.938,0,0,0,360.342,245.571Z"
                                                  transform="translate(-355.093 -245.272)"/>
                                        </g>
                                    </g>
                                    <g id="Group_62" data-name="Group 62" transform="translate(8.616 0)">
                                        <g id="Group_61" data-name="Group 61">
                                            <path id="Path_56" data-name="Path 56"
                                                  d="M299.811,35.133a2.462,2.462,0,0,0,0-2.978.411.411,0,1,0-.642.514,1.658,1.658,0,0,1,0,1.952,2.46,2.46,0,0,0,0,2.978.411.411,0,1,0,.642-.514A1.655,1.655,0,0,1,299.811,35.133Z"
                                                  transform="translate(-298.666 -32.001)"/>
                                        </g>
                                    </g>
                                    <g id="Group_64" data-name="Group 64" transform="translate(6.768 0)">
                                        <g id="Group_63" data-name="Group 63" transform="translate(0 0)">
                                            <path id="Path_57" data-name="Path 57"
                                                  d="M235.741,35.141a2.46,2.46,0,0,0,0-2.978.411.411,0,0,0-.642.514,1.655,1.655,0,0,1,0,1.952,2.462,2.462,0,0,0,0,2.978.411.411,0,1,0,.642-.514A1.658,1.658,0,0,1,235.741,35.141Z"
                                                  transform="translate(-234.597 -32.009)"/>
                                        </g>
                                    </g>
                                    <g id="Group_66" data-name="Group 66" transform="translate(4.924 0.001)">
                                        <g id="Group_65" data-name="Group 65" transform="translate(0 0)">
                                            <path id="Path_58" data-name="Path 58"
                                                  d="M171.811,35.154a2.462,2.462,0,0,0,0-2.978.411.411,0,0,0-.642.513,1.658,1.658,0,0,1,0,1.952,2.46,2.46,0,0,0,0,2.978.411.411,0,1,0,.642-.513A1.655,1.655,0,0,1,171.811,35.154Z"
                                                  transform="translate(-170.666 -32.022)"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>

                            <span>{{__('Breakfast Openbar')}}</span>
                        </div>
                        @endif
                        <div class="text-center">
                            <a href="{{route('booking.locations', $package->id)}}" class="btn-yellow">{{__('Select')}}</a>
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


