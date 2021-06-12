<template>
   <div>

       <div class="modal meeteam-modal fade" id="errorModal" tabindex="-1" role="dialog" aria-hidden="true">
           <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                   <div class="modal-header border-bottom-0">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body text-center">
                       <img src="/img/info.svg" alt="">
                       <p class="text">{{__('Please, choose 2 hotels for safety reasons.')}}</p>
                       <a href="#" class="btn-yellow" data-dismiss="modal" aria-label="Close">{{__('OK')}}</a>
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
                           <div class="line passed"></div>
                           <div class="circle active">
                               2
                           </div>
                           <p class="title">Hotel</p>
                           <div class="line"></div>
                       </div>
                       <div class="d-flex align-items-center position-relative">
                           <div class="line"></div>
                           <div class="circle">
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
                       <span>{{__('Price information')}}</span>
                   </button>
               </div>
               <div class="d-flex justify-content-between align-items-md-end flex-md-row flex-column align-items-start mt-md-0 mt-5">
                   <div class="mt-lg-0 mt-4">
                       <h2 class="title-h3">{{__('Your Location')}}</h2>
                       <h6 class="subtitle">{{__('Please select two hotels')}}</h6>
                   </div>

                   <div class="filters m-0">
                       <select name="" id="">
                           <option value="">{{__('Location')}}</option>
                       </select>
                       <select name="" id="" class="mr-0">
                           <option value="">{{__('Price')}}</option>
                       </select>
                   </div>
               </div>
           </div>

           <div class="choose-hotel-content ml-auto">
               <div class="text-blue pl-2 mb-4">
                   <img src="/img/info.svg" alt="" class="mr-2" width="20">
                   {{__('We have chosen two most fitting hotels for your request')}}
               </div>
               <div class="d-flex w-100 flex-sm-row flex-column">
                   <div class="d-lg-block d-flex flex-wrap hotels">
                       <div class="location-box recommended">
                           <div class="modal meeteam-modal fade" id="hotelModal" tabindex="-1" role="dialog"
                                aria-hidden="true">
                               <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header border-bottom-0">
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                       </div>
                                       <div class="modal-body">
                                           <div class="d-flex align-items-start flex-wrap">
                                               <h2 class="title-h3 mr-3">TITANIC Chaussee Berlin</h2>
                                               <div class="stars mt-1">
                                                   <img src="/img/star.svg" alt="star">
                                                   <img src="/img/star.svg" alt="star">
                                                   <img src="/img/star.svg" alt="star">
                                                   <img src="/img/star.svg" alt="star">
                                                   <img src="/img/star.svg" alt="star">
                                               </div>
                                           </div>
                                           <div
                                               class="d-flex align-items-start justify-content-between mt-3 pr-2 flex-wrap">
                                               <div class="d-flex align-items-start mb-sm-0 mb-3">
                                                   <img src="/img/place.svg" alt="map" class="mr-3">
                                                   Chausseestraße 30, Митте, 10115 Берлин, Германия
                                               </div>
                                               <div>
                                                   2 guests &#183; Studio &#183; 1 bad &#183; 1 bathroom
                                               </div>
                                           </div>

                                           <div class="wrap-modal-slider">
                                               <div class="hotel-modal-slider">
                                                   @foreach($hotel->images()->get() as $image)
                                                   <img src="{{url('/storage/'.$image->url)}}" alt="{{$image->url}}" class="img-fluid">
                                                   @endforeach
                                               </div>
                                           </div>
                                           <div class="hotel-description">
                                               <p>Titanic Chausee Berlin is located in central Berlin, just a 10-minute
                                                   walk from Berlin Central Station. Guests can enjoy the 3,000 m² Befine
                                                   Spa & Sports Club. m with a large indoor pool.</p>
                                               <p>The bright rooms at the Titanic Chausee Berlin are decorated in a
                                                   sophisticated modern style. Each room has a flat-screen TV and a
                                                   spacious bathroom with rain shower.</p>
                                           </div>

                                       </div>

                                   </div>
                               </div>
                           </div>
                           <div class="location-image">
                               <div class="hotel-slider">
                                   @foreach($hotel->images()->get() as $image)
                                   <img src="{{url('/storage/'.$image->url)}}" alt="{{$image->url}}" class="img-fluid"  data-toggle="modal" data-target="#hotelModal">
                                   @endforeach
                               </div>
                               <img src="/img/map.svg" alt="map" class="location-map">
                           </div>

                           <div class="location-text">
                               <div class="stars">
                                   @for($i = 1; $i <= $hotel->stars; $i++)
                                   <img src="/img/star.svg" alt="star">
                                   @endfor
                               </div>
                               <h5 class="location-title">{{$hotel->name}}</h5>
                               <div class="location-description">
                                   <p>{{$hotel->details}}</p>
                               </div>
                               <div class="text-right mt-auto">
                                   <img src="/img/selected.svg" alt="" class="selected">
                                   {{--                                <a href="#" class="btn-yellow btn-yellow-outline"> {{__('See Details')}}</a>--}}
                                   {{--                                <a href="#" class="btn-yellow text-dark"> {{__('Choose hotel')}}</a>--}}
                               </div>
                           </div>
                       </div>
                       <div class="extra-services">
                           {{--                        @foreach($services as $service)--}}
                           {{--                            @foreach($service->images()->get() as $image)--}}
                           <div class="location-box">

                               <div class="location-image">
                                   <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                        alt=""
                                        class="img-fluid">
                               </div>

                               <div class="location-text">

                                   <h5 class="location-title mt-0">Tennis</h5>
                                   <div class="d-flex align-items-end flex-sm-row flex-column">
                                       <div class="location-description mb-3">
                                           This eco-friendly modern hotel is located beside the Potsdamer Platz...
                                       </div>

                                       <div class="text-right mt-auto">
                                           <a href="#" class="btn-yellow mt-0"> Choose</a>
                                       </div>
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

                                   <h5 class="location-title mt-0">Tennis</h5>
                                   <div class="d-flex align-items-end flex-sm-row flex-column">
                                       <div class="location-description mb-3">
                                           This eco-friendly modern hotel is located beside the Potsdamer Platz...
                                       </div>

                                       <div class="text-right mt-auto">
                                           <a href="#" class="btn-yellow mt-0"> Choose</a>
                                       </div>
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

                                   <h5 class="location-title mt-0">Tennis</h5>
                                   <div class="d-flex align-items-end flex-sm-row flex-column">
                                       <div class="location-description mb-3">
                                           This eco-friendly modern hotel is located beside the Potsdamer Platz...
                                       </div>

                                       <div class="text-right mt-auto">
                                           <a href="#" class="btn-yellow mt-0"> Choose</a>
                                       </div>
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

                                   <h5 class="location-title mt-0">Tennis</h5>
                                   <div class="d-flex align-items-end flex-sm-row flex-column">
                                       <div class="location-description mb-3">
                                           This eco-friendly modern hotel is located beside the Potsdamer Platz...
                                       </div>

                                       <div class="text-right mt-auto">
                                           <a href="#" class="btn-yellow mt-0"> Choose</a>
                                       </div>
                                   </div>

                               </div>


                           </div>
                       </div>
                       @foreach($hotels as $item)
                       <div class="location-box">

                           <div class="location-image">
                               <img src="{{$item->thumb}}" alt="{{$item->name}}" class="img-fluid">
                               <img src="/img/map.svg" alt="map" class="location-map">
                           </div>

                           <div class="location-text">
                               <div class="stars">
                                   @for($i = 1; $i <= $item->stars; $i++)
                                   <img src="/img/star.svg" alt="star">
                                   @endfor
                               </div>
                               <h5 class="location-title">{{$item->name}}</h5>
                               <div class="location-description">
                                   <p>{{$item->details}}</p>
                               </div>
                               <div class="text-right mt-auto">
                                   <a href="#" class="btn-yellow btn-yellow-outline"> {{__('See Details')}}</a>
                                   <a href="#" class="btn-yellow text-dark"> {{__('Choose hotel')}}</a>
                               </div>
                           </div>
                       </div>
                       @endforeach
                       <div class="d-flex flex-wrap justify-content-between mt-5 w-100 mb-sm-0 mb-4">
                           <a href="#" class="text-dark">{{__('See more')}}</a>
                           <a href="#" class="btn-yellow" data-toggle="modal" data-target="#errorModal">{{__('Next')}}</a>
                       </div>
                   </div>
                   <div class="hotels-map">
                       <iframe
                           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.211165108784!2d44.508142015684555!3d40.204365479390304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd1458e7d55f%3A0x6806250bc69bda0d!2sAIST%20Global!5e0!3m2!1sen!2s!4v1620729960837!5m2!1sen!2s"
                           width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                   </div>
               </div>

           </div>


       </section>

   </div>
</template>

<script>
import axios from 'axios';

export default {
    name: "HotelComponent",

    data() {
        return {
            hotelData: [],
        }
    },

    props: [
        'hotel',
        'images',
        'services',
        'hotels'
        // 'serviceImages'
    ],

    created() {
        this.hotelData = this.hotel ?? []
        // console.log(this.hotel.name, 'hotel')
    },
    methods: {}

}


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

<style scoped>

</style>
