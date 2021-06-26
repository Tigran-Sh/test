<template>
    <div>
        <div class="steps-content">
            <div class="d-flex align-items-start justify-content-between flex-wrap">
                <div class="steps d-flex align-items-center">
                    <div class="d-flex align-items-center position-relative" v-for="item in steps">
                        <div class="line bg-transparent"></div>
                        <div class="circle "
                             :class="[(current_step === item.step) ? 'active' : '', (current_step > item.step) ? 'passed' : '',]">
                            <img v-if="current_step > item.step" src="/img/checkmark-white.svg" alt="">
                            <span v-else>
                                {{ item.step }}
                            </span>
                        </div>
                        <p class="title">{{ item.name }}</p>
                        <div class="line active"></div>
                    </div>
                </div>
                <button class="btn-icon" data-toggle="modal" data-target="#packageInfoModal">
                    <img src="/img/info.svg" alt="information" width="24">
                    <span>Price Information</span>
                </button>
            </div>
            <div
                class="d-flex justify-content-between align-items-md-end flex-md-row flex-column align-items-start mt-md-0 mt-5">
                <div class="mt-lg-0 mt-4">
                    <h2 class="title-h3">Your Location</h2>
                    <h6 class="subtitle">Please select two hotels</h6>
                </div>

                <div class="filters m-0">
                    <select name="">
                        <option value="">Location</option>
                    </select>
                    <select name="" class="mr-0">
                        <option value="">Price</option>
                    </select>
                </div>
            </div>
        </div>

        <section class="gray-bg">
            <hotels-component
                ref="hotel"
                :hotel="hotel"
                :hotels="hotels"
                :booking="booking"
                :service_images="service_images"
                @hotel_id="chooseHotels"
                v-if="current_step === 2"
                @bookingHotelId="bookingHotelId"
                @hotel_service_id="chooseHotelServices"
                @nextPage="nextPage"
            ></hotels-component>
            <extra-service-component
                v-if="current_step === 3"
                :extraServices="extra_services"
                :booking="booking"
                :hotel="hotel"
                :hotels="hotels"
                :hotel_for_extra_services="hotel_for_extra_services"
                @previousPage="previousPage"
                @choosedExtraServices="choosedExtraServices"
                @nextPage="nextPage"
            ></extra-service-component>
            <transfer-component
                v-if="current_step === 4"
                :extra_services="extra_services"
                @nextPage="nextPage"
            ></transfer-component>
            <check-out-component v-if="current_step === 5"
                                 :booking="booking"
            ></check-out-component>
        </section>

    </div>

</template>

<script>
import HotelsComponent from "../components/booking/HotelsComponent";
import ExtraServiceComponent from "../components/booking/ExtraServiceComponent";
import TransferComponent from "../components/booking/TransferComponent";
import CheckOutComponent from "../components/booking/CheckOutComponent";

export default {
    name: "ReservationComponent",
    components: {CheckOutComponent, TransferComponent, ExtraServiceComponent, HotelsComponent},
    created() {
    },
    data() {
        return {
            booking: {
                reservation_data: {
                    hotels: [],
                    hotel_services: [],
                    extra_services: []
                }
            },
            steps: [
                {
                    step: 1,
                    name: 'Meeting Package'
                },

                {
                    step: 2,
                    name: 'Hotel'
                },

                {
                    step: 3,
                    name: 'Extra Service'
                },

                {
                    step: 4,
                    name: 'Transfer'
                },

                {
                    step: 5,
                    name: 'Check out'
                },
            ],

            current_step: 2
        }
    },
    props: ['hotel', 'hotels', 'extra_services', 'hotel_for_extra_services', 'service_images'],
    methods: {
        nextPage(page) {
            console.log(page, 'next')
            this.current_step = page
        },
        previousPage(page) {
            console.log(page)
            this.current_step = page
        },
        choosedExtraServices(choosedExtraServices){
            console.log(choosedExtraServices,'choosedExtraServices');
            this.extra_services = choosedExtraServices;
        },
        chooseHotels(hotel_id) {
            console.log(hotel_id)
            if (!this.booking.reservation_data.hotels.length) {
                this.booking.reservation_data.hotels.push(hotel_id)
            } else {
                if (this.booking.reservation_data.hotels.includes(hotel_id)) {
                    this.booking.reservation_data.hotels.splice(this.booking.reservation_data.hotels.indexOf(hotel_id), 1);
                } else {
                    // console.log(,'barev')
                    if (this.booking.reservation_data.hotels.length >= 2) {
                        console.log(this.booking.reservation_data.hotels.unshift())
                        this.booking.reservation_data.hotels.push(hotel_id)
                    } else {
                        this.booking.reservation_data.hotels.push(hotel_id)
                    }
                }
            }
            this.$refs.hotel.getHotel(this.booking);
        },
        chooseHotelServices(hotel_service_id) {
            if (!this.booking.reservation_data.hotel_services.length) {
                this.booking.reservation_data.hotel_services.push(hotel_service_id);
            } else {
                if (this.booking.reservation_data.hotel_services.includes(hotel_service_id)) {
                    let index = this.booking.reservation_data.hotel_services.indexOf(hotel_service_id)
                    this.booking.reservation_data.hotel_services.splice(index, 1)
                } else {
                    this.booking.reservation_data.hotel_services.push(hotel_service_id);
                }
            }
            this.$refs.hotel.getHotelServices(this.booking);
        },
        bookingHotelId: function(bookingHotelId){
            this.booking.reservation_data.hotels = bookingHotelId
        },
    },
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
