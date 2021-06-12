@extends('layouts.app')
@section('head')
    <style>
        header {
            border-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <div class="modal meeteam-modal fade date-modal" id="chooseDate" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content gray-bg">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center pt-0">
                    <h4 class="title-h4">Please Choose date</h4>
                    <div class="choose-date">
                        <img src="/img/dates.png" alt="" class="img-fluid">

                    </div>
                    <a href="#" class="btn-yellow">Submit</a>
                </div>

            </div>
        </div>
    </div>
    <div class="modal meeteam-modal package-info-modal fade" id="packageInfoModal" tabindex="-1" role="dialog"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center mb-5">Package Information</h5>
                    <div class="sidebar-info border-bottom-0">
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


                    </div>
                    <div class="sidebar-info border-bottom-0">
                        <h6 class="title"><img src="/img/close.svg" alt="close" class="mr-2" width="18">My choosed
                            hotels (1)</h6>
                        <div class="d-flex align-items-start sidebar-info-div">
                            <span>Name</span>
                            <span>Riu Plaza Berlin</span>
                        </div>
                        <div class="d-flex align-items-start sidebar-info-div">
                            <span>Stars</span>
                            <span class="stars mb-0">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                        </span>
                        </div>
                        <div class="d-flex align-items-start sidebar-info-div">
                            <span>Location</span>
                            <span>Martin-Luther-Str. 1, 10777 Berlin, Germany</span>
                        </div>

                    </div>
                    <div class="sidebar-info border-bottom-0">
                        <h6 class="title"><img src="/img/close.svg" alt="close" class="mr-2" width="18">My choosed
                            hotels (2)</h6>
                        <div class="d-flex align-items-start sidebar-info-div">
                            <span>Name</span>
                            <span>Riu Plaza Berlin</span>
                        </div>
                        <div class="d-flex align-items-start sidebar-info-div">
                            <span>Stars</span>
                            <span class="stars mb-0">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                        </span>
                        </div>
                        <div class="d-flex align-items-start sidebar-info-div">
                            <span>Location</span>
                            <span>Martin-Luther-Str. 1, 10777 Berlin, Germany</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="gray-bg">
        <div class="steps-content">
            <div class="d-flex align-items-start justify-content-between flex-wrap">
                <div class="steps d-flex align-items-center">
                    <div class="d-flex align-items-center position-relative">
                        <div class="line bg-transparent"></div>
                        <div class="circle passed">
                            <img src="/img/checkmark-white.svg" alt="">
                        </div>
                        <p class="title">Meeting Package</p>
                        <div class="line active"></div>
                    </div>
                    <div class="d-flex align-items-center position-relative">
                        <div class="line active"></div>
                        <div class="circle passed">
                            <img src="/img/checkmark-white.svg" alt="">
                        </div>
                        <p class="title">Hotel</p>
                        <div class="line active"></div>
                    </div>
                    <div class="d-flex align-items-center position-relative">
                        <div class="line active"></div>
                        <div class="circle active">
                            3
                        </div>
                        <p class="title">Extra Service</p>
                        <div class="line"></div>
                    </div>
                    <div class="d-flex align-items-center position-relative">
                        <div class="line"></div>
                        <div class="circle">
                            4
                        </div>
                        <p class="title">Transfer</p>
                        <div class="line"></div>
                    </div>
                    <div class="d-flex align-items-center position-relative">
                        <div class="line"></div>
                        <div class="circle">
                            5
                        </div>
                        <p class="title">Check out</p>
                        <div class="line bg-transparent"></div>
                    </div>
                </div>
                <button class="btn-icon" data-toggle="modal" data-target="#packageInfoModal">
                    <img src="/img/info.svg" alt="information" width="24">
                    <span>{{__('Package information')}}</span>
                </button>
            </div>

            <h2 class="title-h3 mt-lg-0 mt-4">{{__('Add extra services')}}</h2>
            <ul class="nav nav-tabs custom-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="hotel-1-tab" data-toggle="tab" href="#hotel-1" role="tab"
                       aria-controls="hotel-1" aria-selected="true">Scandic Berlin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="hotel-2-tab" data-toggle="tab" href="#hotel-2" role="tab"
                       aria-controls="hotel-2" aria-selected="false">Hotel Adlon</a>
                </li>
            </ul>
            <div class="tab-content pt-0" id="myTabContent">
                <div class="tab-pane fade show active" id="hotel-1" role="tabpanel" aria-labelledby="hotel-1-tab">
                    <div class="filters">
                        <select name="" id="">
                            <option value="">{{__('Hotel service')}}</option>
                        </select>
                        <select name="" id="">
                            <option value="">{{__('Location')}}</option>
                        </select>
                        <select name="" id="">
                            <option value="">{{__('Price')}}</option>
                        </select>
                        <select name="" id="">
                            <option value="">{{__('Type')}}</option>
                        </select>
                    </div>
                    <div class="d-lg-block d-flex flex-wrap">
                        <div class="location-box">

                            <div class="location-image">
                                <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                     alt=""
                                     class="img-fluid">
                            </div>

                            <div class="location-text">

                                <h5 class="location-title mt-0">Billiard</h5>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="text-right mt-auto">
                                    <a href="#" class="btn-yellow btn-yellow-outline mt-0"> Choose</a>
                                </div>
                            </div>


                        </div>
                        <div class="location-box">

                            <div class="location-image">
                                <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                     alt=""
                                     class="img-fluid">
                            </div>

                            <div class="location-text">

                                <h5 class="location-title mt-0">Billiard</h5>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="text-right mt-auto">
                                    <a href="#" class="btn-yellow btn-yellow-outline mt-0"> Choose</a>
                                </div>
                            </div>


                        </div>
                        <div class="location-box">

                            <div class="location-image">
                                <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                     alt=""
                                     class="img-fluid">
                            </div>

                            <div class="location-text">

                                <h5 class="location-title mt-0">Billiard</h5>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="text-right mt-auto">
                                    <a href="#" class="btn-yellow btn-yellow-outline mt-0"> Choose</a>
                                </div>
                            </div>


                        </div>
                        <div class="location-box">

                            <div class="location-image">
                                <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                     alt=""
                                     class="img-fluid">
                            </div>

                            <div class="location-text">

                                <h5 class="location-title mt-0">Billiard</h5>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="text-right mt-auto">
                                    <a href="#" class="btn-yellow btn-yellow-outline mt-0"> Choose</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="hotel-2" role="tabpanel" aria-labelledby="hotel-2-tab">
                    <div class="filters">
                        <select name="" id="">
                            <option value="">{{__('Hotel service')}}</option>
                        </select>
                        <select name="" id="">
                            <option value="">{{__('Location')}}</option>
                        </select>
                        <select name="" id="">
                            <option value="">{{__('Price')}}</option>
                        </select>
                        <select name="" id="">
                            <option value="">{{__('Type')}}</option>
                        </select>
                    </div>
                    <div class="d-lg-block d-flex flex-wrap">
                        <div class="location-box">

                            <div class="location-image">
                                <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                     alt=""
                                     class="img-fluid">
                            </div>

                            <div class="location-text">

                                <h5 class="location-title mt-0">Billiard</h5>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="text-right mt-auto">
                                    <a href="#" class="btn-yellow btn-yellow-outline mt-0"> Choose</a>
                                </div>
                            </div>


                        </div>
                        <div class="location-box">

                            <div class="location-image">
                                <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                     alt=""
                                     class="img-fluid">
                            </div>

                            <div class="location-text">

                                <h5 class="location-title mt-0">Billiard</h5>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="text-right mt-auto">
                                    <a href="#" class="btn-yellow btn-yellow-outline mt-0"> Choose</a>
                                </div>
                            </div>


                        </div>
                        <div class="location-box">

                            <div class="location-image">
                                <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                     alt=""
                                     class="img-fluid">
                            </div>

                            <div class="location-text">

                                <h5 class="location-title mt-0">Billiard</h5>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="text-right mt-auto">
                                    <a href="#" class="btn-yellow btn-yellow-outline mt-0"> Choose</a>
                                </div>
                            </div>


                        </div>
                        <div class="location-box">

                            <div class="location-image">
                                <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                     alt=""
                                     class="img-fluid">
                            </div>

                            <div class="location-text">

                                <h5 class="location-title mt-0">Billiard</h5>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="location-description mb-1">
                                    Scandic Berlin Potsdamer Platz
                                </div>
                                <div class="location-info mb-2">
                                    €72/ hour
                                </div>
                                <div class="text-right mt-auto">
                                    <a href="#" class="btn-yellow btn-yellow-outline mt-0"> Choose</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-5 mb-4">
                <a href="#" class="btn-yellow dark mt-5">{{__('Skip')}}</a>
                <a href="#" class="btn-yellow mt-5" data-toggle="modal" data-target="#chooseDate">{{__('Next')}}</a>
            </div>
        </div>
    </section>

@endsection


