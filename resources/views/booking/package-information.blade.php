@extends('layouts.app')
@section('head')
    <style>
        header {
            border-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <section class="gray-bg d-flex flex-wrap">

        <div class="gray-left-side package-info">
            <div class="gray-left-side-content w-100">
                <div class="open-mobile-info d-md-none text-right mb-3">
                    <img src="/img/info-icon.svg" alt="" width="25">
                </div>
                <h2 class="title-h4">My choosed package information</h2>
                <div class="d-flex package-table">
                    <div class="titles">
                        <div class="cell">Meeting</div>
                        <div class="cell">Hotels</div>
                        <div class="cell">Restaurant</div>
                        <div class="cell">Additional Services</div>
                    </div>
                    <div class="dates">
                        <div class="dates-slider">
                            <div class="cell">
                                <div>15.01</div>
                            </div>
                            <div class="cell">
                                <div>16.01</div>
                            </div>
                            <div class="cell">
                                <div>17.01</div>
                            </div>
                            <div class="cell">
                                <div>18.01</div>
                            </div>

                        </div>
                        <div class="check-slider">
                            <div>
                                <div class="cell active"><img src="/img/checkmark.svg" alt=""></div>
                                <div class="cell"></div>
                                <div class="cell active"><img src="/img/checkmark.svg" alt=""></div>
                                <div class="cell"></div>
                            </div>
                            <div>
                                <div class="cell"></div>
                                <div class="cell active"><img src="/img/checkmark.svg" alt=""></div>
                                <div class="cell"></div>
                                <div class="cell"></div>
                            </div>
                            <div>
                                <div class="cell"></div>
                                <div class="cell"></div>
                                <div class="cell"></div>
                                <div class="cell active"><img src="/img/checkmark.svg" alt=""></div>
                            </div>
                            <div>
                                <div class="cell"></div>
                                <div class="cell"></div>
                                <div class="cell active"><img src="/img/checkmark.svg" alt=""></div>
                                <div class="cell"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <img src="/img/cancel.svg" alt="" class="close-btn">
            <div class="sidebar-content">
                <div class="sidebar-info">
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
                <div class="sidebar-info">
                    <h6 class="title">My choosed hotels (1)</h6>
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
    </section>

@endsection
@section('scripts')
    <script>

        $('.dates-slider').slick({
            slidesToShow: 3,
            arrows: true,
            variableWidth: true,
            asNavFor: '.check-slider',
            responsive: [
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });

        $('.check-slider').slick({
            slidesToShow: 3,
            asNavFor: '.dates-slider',
            dots: false,
            variableWidth: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });
        $('.check-slider .cell').click(function () {
            if ($(this).children().length === 0) {
                $(this).append('<img src="/img/checkmark.svg">');
                $(this).addClass('active')
            } else {
                $(this).children('img').remove();
                $(this).removeClass('active')
            }

        })
    </script>
@endsection

