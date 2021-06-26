@extends('layouts.app')
@section('head')
    <style>
        header {
            border-bottom: 0;
        }
    </style>
@endsection
@section('content')
    <reservation-component
        {{--            :hotel_ids="{{ $hotel_ids }}"--}}
        {{--            :package="{{ $package }}"--}}
        :hotel="{{ $hotel }}"
        :service_images="{{ $service_images }}"
        :hotels="{{ json_encode($hotels) }}"
        :extra_services="{{ $extraServices }}"
        :hotel_for_extra_services="{{ json_encode($hotelsForExtraServices) }}"
        {{--            :hotels="{{ $hotels }}"--}}
        {{--            :services="{{ $services }}"--}}
    ></reservation-component>

@endsection

@section('scripts')
    <script>
        $('.hotel-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: true,
        });

        $('.hotel-modal-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 444,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
        $('.modal').on('shown.bs.modal', function (e) {
            $('.hotel-modal-slider').slick('setPosition');
            $('.wrap-modal-slider').addClass('open');
        })
    </script>
@endsection
