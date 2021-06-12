@extends('layouts.app')
@section('head')
    <link href="{{ mix('css/profile.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="modal meeteam-modal fade" id="mapModal" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3047.225418034171!2d44.5112398!3d40.2040484!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd341954b22d%3A0xe34c4cfe7baaccdf!2sNairi%20Zaryan%20St%2C%20Yerevan!5e0!3m2!1sen!2s!4v1616154788922!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

            </div>
        </div>
    </div>
    <section class="gray-bg d-flex">
        @include('profile.profile_nav')
        <div class="profile-right-side comparison">
            <h2 class="title-h3">{{__('Comparison')}}</h2>
            <h6 class="subtitle mb-5">{{__('Lorem ipsum dolor sit amet, consectetur adipiscing eli.')}}</h6>
            <div class="sidebar-info border-0 text-black mb-0">
                <h6 class="yellow-text">{{__('Package information')}}</h6>
                <div class="d-flex align-items-start sidebar-info-div">
                    <span class="text-black">Package name</span>
                    <span>Sustainability</span>
                </div>
                <div class="d-flex align-items-start sidebar-info-div">
                    <span class="text-black">Date</span>
                    <span>15.10-16.10.2021</span>
                </div>
                <div class="d-flex align-items-start sidebar-info-div">
                    <span class="text-black">Hotel service</span>
                    <span>Beachtour</span>
                </div>
                <div class="d-flex align-items-start sidebar-info-div">
                    <span class="text-black">Rooms</span>
                    <span>2 DZ &#183; 1 EZ</span>
                </div>

            </div>
            <div class="comparison-hotels">
                <div class="map" data-toggle="modal" data-target="#mapModal">
                    <img src="/img/map-round.svg" alt="map">
                    <span>Map</span>
                    <span>(To compare addresses of both hotels)</span>
                </div>
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="comparison-box">
                        <img src="/img/location.png" alt="" class="comparison-image">
                        <div class="stars">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star-empty.svg" alt="">
                        </div>
                        <h5 class="comparison-title">Scandic Berlin Potsdamer Platz</h5>
                        <div class="comparison-description">
                            <p>This modern, eco-friendly hotel This modern, eco-friendly hotel This modern,
                                eco-friendly
                                hotel This modern, eco-friendly hotel This modern, eco-friendly hotel</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>EZ Price</span>
                            <span>€ 50</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>DZ Price</span>
                            <span>€ 80</span>
                        </div>
                        <div class="price">
                            <div class="d-flex justify-content-between">
                                <span>New Price per person</span>
                                <span>€ 210</span>
                            </div>
                            <div class="d-flex justify-content-between price-old">
                                <span>Old Price per person</span>
                                <span>€ 250</span>
                            </div>
                        </div>
                        <div class="text-green font-12">Free cancellation</div>
                        <h5 class="comparison-title mt-5">Extra Service</h5>
                        <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png" alt=""
                             class="comparison-image small">
                        <h5 class="comparison-title big mt-2 mb-3">Billiard</h5>
                        <div class="text-black-52 mb-1"> Scandic Berlin</div>
                        <div class="mb-3"> €72/ hour</div>
                        <div class="text-black-52 mb-1"> Park Inn by Radisson Berlin Alexanderplatz</div>
                        <div class="mb-2"> €60/ hour</div>
                        <div class="text-center mt-4">
                            <a href="#" class="btn-yellow">Book</a>
                        </div>
                    </div>
                    <div class="comparison-box">
                        <img src="/img/location.png" alt="" class="comparison-image">
                        <div class="stars">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star.svg" alt="">
                            <img src="/img/star-empty.svg" alt="">
                        </div>
                        <h5 class="comparison-title">Riu Plaza Berlin</h5>
                        <div class="comparison-description">
                            <p>This modern, eco-friendly hotel This modern, eco-friendly hotel This modern,
                                eco-friendly
                                hotel This modern, eco-friendly hotel This modern, eco-friendly hotel</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>EZ Price</span>
                            <span>€ 50</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>DZ Price</span>
                            <span>€ 80</span>
                        </div>
                        <div class="price">
                            <div class="d-flex justify-content-between">
                                <span>New Price per person</span>
                                <span>€ 210</span>
                            </div>
                            <div class="d-flex justify-content-between price-old">
                                <span>Old Price per person</span>
                                <span>€ 250</span>
                            </div>
                        </div>
                        <div class="text-red font-12">No cancellation</div>
                        <h5 class="comparison-title mt-5">Extra Service</h5>
                        <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png" alt=""
                             class="comparison-image small">
                        <h5 class="comparison-title big mt-2 mb-3">Billiard</h5>
                        <div class="text-black-52 mb-1"> Scandic Berlin</div>
                        <div class="mb-3"> €72/ hour</div>
                        <div class="text-black-52 mb-1"> Park Inn by Radisson Berlin Alexanderplatz</div>
                        <div class="mb-2"> €60/ hour</div>
                        <div class="text-center mt-4">
                            <a href="#" class="btn-yellow">Book</a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
@endsection


