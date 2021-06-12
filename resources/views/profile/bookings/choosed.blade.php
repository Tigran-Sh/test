@extends('layouts.app')
@section('head')
    <link href="{{ mix('css/profile.css') }}" rel="stylesheet">
@endsection
@section('content')

    <section class="gray-bg d-flex">
        @include('profile.profile_nav')
        <div class="profile-right-side booking">
            <h2 class="title-h3">{{__('My bookings')}}</h2>
            <div class="choosed">
                <div class="d-flex justify-content-between flex-lg-row flex-column">
                    <div class="choosed-info">
                        <div class="sidebar-info border-0">
                            <h6 class="yellow-text">My choosed package</h6>
                            <div class="d-flex align-items-start sidebar-info-div">
                                <span>Type</span>
                                <span>Sustainability</span>
                            </div>
                            <div class="d-flex align-items-start sidebar-info-div">
                                <span>Price</span>
                                <span>€ 210</span>
                            </div>
                            <div class="d-flex align-items-start sidebar-info-div">
                                <span>Overnightstay</span>
                                <span>15.10.2019</span>
                            </div>
                            <div class="d-flex align-items-start sidebar-info-div">
                                <span>Meetingday</span>
                                <span>16.10.2019</span>
                            </div>
                            <div class="d-flex align-items-start sidebar-info-div">
                                <span>Beachtour</span>
                                <span>16.10.2019</span>
                            </div>

                        </div>
                    </div>
                    <div class="choosed-location">
                        <div class="location-box size-small ml-lg-auto">

                            <div class="location-image">
                                <img src="/img/location.png" alt="" class="img-fluid">
                                <img src="/img/map.svg" alt="" class="location-map">
                            </div>

                            <div class="location-text">
                                <div class="stars">
                                    <img src="/img/star.svg" alt="">
                                    <img src="/img/star.svg" alt="">
                                    <img src="/img/star.svg" alt="">
                                    <img src="/img/star.svg" alt="">
                                </div>
                                <h5 class="location-title">Riu Plaza Berlin</h5>
                                <div class="location-info">
                                    <span>2 guests</span>
                                    <span>&#183;</span>
                                    <span>Studio</span>
                                    <span>&#183;</span>
                                    <span>1 bad</span>
                                </div>
                                <div class="location-description">
                                    <p>This modern, eco-friendly hotel This modern, eco-friendly hotel This modern,
                                        eco-friendly
                                        hotel This modern, eco-friendly hotel This modern, eco-friendly hotel</p>
                                </div>

                            </div>


                        </div>
                    </div>

                </div>
                <div class="download-invoice d-flex flex-wrap justify-content-end align-items-center">
                    <a href="#" download class="download justify-content-end mb-3">
                        <img src="/img/download.svg" alt="">
                        <span>Download Invoice</span>
                    </a>
                    <a href="#" download class="download justify-content-end mb-3">
                        <img src="/img/download.svg" alt="">
                        <span>Download Invoice</span>
                    </a>
                    <a href="#" download class="download justify-content-end mb-3">
                        <img src="/img/download.svg" alt="">
                        <span>Download Invoice</span>
                    </a>
                </div>
            </div>

        </div>
    </section>
@endsection


