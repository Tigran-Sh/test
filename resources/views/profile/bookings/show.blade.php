@extends('layouts.app')
@section('head')
    <link href="{{ mix('css/profile.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="modal meeteam-modal fade" id="paymentModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p class="text">If you want to finish your booking request, please finish start the payment process
                        by pressing 'Booking"</p>
                    <a href="#" class="btn-yellow">Payment</a>
                </div>

            </div>
        </div>
    </div>
    <section class="gray-bg d-flex">
        @include('profile.profile_nav')
        <div class="profile-right-side booking">
            <div class="open-mobile-info d-lg-none text-right mb-3">
                <img src="/img/info-icon.svg" alt="" width="25">
            </div>
            <h2 class="title-h3">{{__('My bookings')}}</h2>
            <div class="d-flex">
                <div class="booking-tabs">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-hotels-tab" data-toggle="pill" href="#pills-hotels"
                               role="tab"
                               aria-controls="pills-hotels" aria-selected="true">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-service-tab" data-toggle="pill" href="#pills-service"
                               role="tab"
                               aria-controls="pills-service" aria-selected="false">Extra Service</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-hotels" role="tabpanel"
                             aria-labelledby="pills-hotels-tab">
                            <div class="status-box status-box-pending">
                                <div class="text">Booking status to be confirmed by hotel is</div>
                                <div class="status">
                                    <img src="/img/time-white.svg" alt="">
                                    <span>Pending</span>
                                </div>
                            </div>
                            <div class="location-box size-small">

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
                                    <div class="text-right mt-auto">
                                        <a href="#" class="btn-yellow btn-yellow-outline"> Choose</a>
                                    </div>
                                </div>


                            </div>
                            <a href="#" download class="download justify-content-end">
                                <img src="/img/download.svg" alt="">
                                <span>Download Invoice</span>
                            </a>

                            <div class="status-box status-box-accepted">
                                <div class="text">Booking status to be confirmed by hotel is</div>
                                <div class="status">
                                    <img src="/img/check-white.svg" alt="">
                                    <span>Accepted</span>
                                </div>
                            </div>
                            <div class="location-box size-small">

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
                                    <h5 class="location-title">Scandic Berlin Potsdamer Platz</h5>
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
                                    <div class="location-price">
                                        Price <span>€ 210</span>
                                        <del>€ 410</del>
                                    </div>
                                    <div class="text-right mt-auto">
                                        <a href="#" class="btn-yellow btn-yellow-outline"> Choose</a>
                                    </div>
                                </div>


                            </div>
                            <a href="#" download class="download justify-content-end">
                                <img src="/img/download.svg" alt="">
                                <span>Download Invoice</span>
                            </a>

                            <div class="d-flex justify-content-end pt-4 pr-sm-3 flex-wrap">
                                <button class="btn-yellow gray mb-2">Dicline</button>
                                <button class="btn-yellow ml-3 mb-2">Reserve</button>
                                <button class="btn-yellow ml-3 mb-2" data-toggle="modal" data-target="#paymentModal">
                                    Book
                                </button>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-service" role="tabpanel"
                             aria-labelledby="pills-service-tab">
                            <div class="location-box">

                                <div class="location-image">
                                    <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                         alt=""
                                         class="img-fluid">
                                </div>


                                <div class="location-text gray-bg">

                                    <h5 class="location-title mt-0">Billiard</h5>
                                    <div class="location-description mb-1">
                                        Scandic Berlin
                                    </div>
                                    <div class="location-info mb-2">
                                        €72/ hour
                                    </div>
                                    <div class="location-description mb-1">
                                        Park Inn by Radisson Berlin Alexanderplatz
                                    </div>
                                    <div class="location-info mb-2">
                                        €72/ hour
                                    </div>

                                </div>


                            </div>
                            <div class="location-box">
                                <div class="location-image">
                                    <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                         alt=""
                                         class="img-fluid">
                                </div>
                                <div class="location-text gray-bg">

                                    <h5 class="location-title mt-0">Billiard</h5>
                                    <div class="location-description mb-1">
                                        Scandic Berlin
                                    </div>
                                    <div class="location-info mb-2">
                                        €72/ hour
                                    </div>
                                    <div class="location-description mb-1">
                                        Park Inn by Radisson Berlin Alexanderplatz
                                    </div>
                                    <div class="location-info mb-2">
                                        €72/ hour
                                    </div>

                                </div>


                            </div>
                            <div class="d-flex justify-content-end pt-4 pr-sm-3 flex-wrap">
                                <button class="btn-yellow gray mb-2">Dicline</button>
                                <button class="btn-yellow ml-3 mb-2">Reserve</button>
                                <button class="btn-yellow ml-3 mb-2" data-toggle="modal" data-target="#paymentModal">
                                    Book
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sidebar sidebar-small">
                    <img src="/img/cancel.svg" alt="" class="close-btn">
                    <div class="sidebar-content">
                        <a href="#" class="text-white d-flex align-items-center mb-4">
                            <img src="/img/date.svg" alt="" class="mr-2">Calendar</a>
                        <div class="sidebar-info border-0">
                            <h6 class="title">My choosed package</h6>
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

                </div>
            </div>

        </div>
    </section>
@endsection


