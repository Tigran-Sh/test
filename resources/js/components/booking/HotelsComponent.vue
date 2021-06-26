<template>
    <div>
        <modal name="my-first-modal" v-if="modalData">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="text-center mb-5">Package Information</h5>
                    <div class="sidebar-info border-bottom-0">
                        <h6 class="title"><img src="/img/close.svg" alt="close" class="mr-2" width="18">Hotel</h6>
                        <div class="d-flex align-items-start sidebar-info-div">
                            <span>Name</span>
                            <span>{{ modalData.name }}</span>
                        </div>
                        <div class="d-flex align-items-start sidebar-info-div">
                            <span>Stars</span>
                            <span class="stars mb-0">
                            <img v-for="stars in modalData.stars" src="/img/star.svg" alt="">
                        </span>
                        </div>
                        <div class="d-flex align-items-start sidebar-info-div">
                            <span>Location</span>
                            <span>{{ modalData.name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </modal>
        <modal name="replace-choosed-hotel">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="text-center mb-5">Replace</h2>
                    <cool-select
                        v-model="selected"
                        :items="allChoosed"
                        item-value="id"
                        item-text="name"
                        placeholder="Select Hotels "
                    />
                </div>
                <div class="modal-footer">
                    <button @click="replaceSelceted" class="btn-yellow">ok</button>
                </div>
            </div>
        </modal>
        <modal name="warning-select">
            <div class="modal-content">
                <div class="modal-body">
                    <h2 class="text-center mb-5">You can choose second hotel</h2>
                </div>
                <div class="modal-footer">
                    <button @click="$modal.hide('warning-select')" class="btn-yellow">choose</button>
                    <button @click="$emit('nextPage', 3)" class="btn-yellow">next</button>
                </div>
            </div>
        </modal>

        <div class="choose-hotel-content ml-auto">
            <div class="text-blue pl-2 mb-4">
                <img src="/img/info.svg" alt="" class="mr-2" width="20">
                We have chosen two most fitting hotels for your request
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
                                                <img v-for="star in hotel.stars" src="/img/star.svg" alt="star">
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
                                                <img @click="showHotelModal(hotel)" v-for="image in hotel.images"
                                                     :src="`/storage/${image.url}`"
                                                     :alt="`${image.url}`" class="img-fluid">
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
                                <img @click="showHotelModal(hotel)" v-for="image in hotel.images"
                                     :src="`/storage/${image.url}`" :alt="`${image.url}`"
                                     class="img-fluid">
                            </div>
                            <img src="/img/map.svg" alt="map" class="location-map">
                        </div>
                        <div class="location-text">
                            <div class="stars">
                                <img v-for="star in hotel.stars" src="/img/star.svg" alt="star">
                            </div>
                            <h5 class="location-title">{{ hotel.name }}</h5>
                            <div class="location-des cription">
                                <p>{{ hotel.details }}</p>
                            </div>
                            <div class="price-per-person">
                                <span>Price sads</span>
                                <span>€ {{ hotel.price.d_price }}</span>
                            </div>
                            <div class="text-right mt-auto">
                                <button @click="seeDetails(hotel.services)" class="btn-yellow btn-yellow-outline">See
                                    Details
                                </button>
                                <img v-if="bookingHotelId.includes(hotel.id)" @click="$emit('hotel_id', hotel.id)"
                                     src="/img/selected.svg" alt="">

                                <button v-if="!bookingHotelId.includes(hotel.id)" @click="$emit('hotel_id', hotel.id)"
                                        class="btn-yellow mt-0">
                                    Choose
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="extra-services" v-if="hidden">
                        <div class="location-box" v-for="service in hotel.services">
                            <div class="location-image">
                                <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                     alt=""
                                     class="img-fluid">
                            </div>
                            <div class="location-text">

                                <h5 class="location-title mt-0">{{ service.data.name }}</h5>
                                <div class="d-flex align-items-end flex-sm-row flex-column">
                                    <div class="location-description mb-3"
                                         v-html="service.data.details"
                                    />
                                    <div class="text-right mt-auto">
                                        <img v-if="bookingId.includes(service.id)"
                                             @click="$emit('hotel_service_id', service.id)"
                                             src="/img/selected.svg" alt="">

                                        <button v-if="!bookingId.includes(service.id)"
                                                @click="$emit('hotel_service_id', service.id)"
                                                class="btn-yellow mt-0">
                                            Choose
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div v-for="hotel in hotels.data">
                        <div class="location-box">
                            <div class="location-image">
                                <div class="hotel-slider">
                                    <img v-for="image in hotel.images" :src="`/storage/${image.url}`"
                                         :alt="`/storage/${image.url}`" class="img-fluid">
                                </div>
                                <img src="/img/map.svg" alt="map" class="location-map">
                            </div>
                            <div class="location-text">
                                <div class="stars">
                                    <img v-for="star in hotel.stars" src="/img/star.svg" alt="star">
                                </div>
                                <h5 class="location-title">{{ hotel.name }}</h5>
                                <div class="location-description">
                                    <p>{{ hotel.details }}</p>
                                </div>
                                <div class="price-per-person">
                                    <span>Price</span>
                                    <span>€ {{ hotel.price.d_price }}</span>
                                </div>
                                <div class="text-right mt-auto">
                                    <button @click="seeDetails(hotel.services, hotel.id)"
                                            class="btn-yellow btn-yellow-outline">See Details
                                    </button>

                                    <img v-if="bookingHotelId.includes(hotel.id)" @click="$emit('hotel_id', hotel.id)"
                                         src="/img/selected.svg" alt="">

                                    <button v-if="!bookingHotelId.includes(hotel.id)"
                                            @click="$emit('hotel_id', hotel.id)"
                                            class="btn-yellow mt-0">
                                        Choose
                                    </button>
                                    <!--                                    <img v-if="secondHotel === hotel.id" @click="chooseSecondHotel(hotel.id, false)"-->
                                    <!--                                         src="/img/selected.svg" alt="">-->
                                    <!--                                    <button v-if="secondHotel !== hotel.id" @click="chooseSecondHotel(hotel.id, true)"-->
                                    <!--                                            class="btn-yellow text-dark">Choose Hotel-->
                                    <!--                                    </button>-->
                                </div>
                            </div>
                        </div>
                        <div class="extra-services" v-if="hotelId === hotel.id">
                            <div class="location-box" v-for="service in hotel.services">
                                <div class="location-image">
                                    <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"
                                         alt=""
                                         class="img-fluid">
                                </div>
                                <div class="location-text">
                                    <h5 class="location-title mt-0">{{ service.data.name }}</h5>
                                    <div class="d-flex align-items-end flex-sm-row flex-column">
                                        <div class="location-description mb-3"
                                             v-html="service.data.details"
                                        />
                                        <div class="text-right mt-auto">

                                            <img v-if="bookingId.includes(service.id)"
                                                 @click="$emit('hotel_service_id', service.id)"
                                                 src="/img/selected.svg" alt="">

                                            <button v-if="!bookingId.includes(service.id)"
                                                    @click="$emit('hotel_service_id', service.id)"
                                                    class="btn-yellow mt-0">
                                                Choose
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap justify-content-between mt-5 w-100 mb-sm-0 mb-4">
                        <a href="#" class="text-dark">See more</a>
                        <button @click="nextPage" class="btn-yellow" data-toggle="modal"
                                data-target="#errorModal">Next
                        </button>
                    </div>
                </div>
                <div class="hotels-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.211165108784!2d44.508142015684555!3d40.204365479390304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd1458e7d55f%3A0x6806250bc69bda0d!2sAIST%20Global!5e0!3m2!1sen!2s!4v1620729960837!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import {CoolSelect} from 'vue-cool-select'

export default {
    name: "HotelsComponent",
    props: ['hotel', 'hotels', 'service_images'],
    data() {
        return {
            choosedHotel: false,
            secondHotel: '',
            hotel_ids: [],
            hidden: true,
            another_service: [],
            hotelId: '',
            modalData: [],
            bookingId: [],
            bookingHotelId: [],
            replaceId: '',
            selected: '',
            allChoosed: []
        }
    },
    components: {CoolSelect},

    created() {
    },
    methods: {
        seeDetails(services, id) {
            this.hotelId = id;
            this.hidden = !id;
            this.another_service = services
        },

        showHotelModal: function (modalData) {
            this.modalData = modalData;
            this.$modal.show('my-first-modal');
        },

        nextPage: function () {
            if (this.bookingHotelId.length < 2) {
                this.$modal.show('warning-select');
            } else {
                this.$emit('nextPage', 3);
            }
        },

        getHotel: function (hotel) {
            this.bookingHotelId = hotel.reservation_data.hotels;
            if (this.bookingHotelId.length > 2) {
                this.replaceId = this.bookingHotelId.pop();
                console.log(this.replaceId, 'ena vory poxum em')
                console.log(this.bookingHotelId, 'bolory baci chyntrvacic')

                this.hotels.data.map(hotel => {
                    if (this.bookingHotelId.includes(hotel.id)) {
                        this.allChoosed.push({
                            'id': hotel.id,
                            'name': hotel.name
                        })
                    }
                });
                if (this.bookingHotelId.includes(this.hotel.id)) {
                    this.allChoosed.push({
                        'id': this.hotel.id,
                        'name': this.hotel.name
                    })
                }

                this.$modal.show('replace-choosed-hotel');
            }
        },

        replaceSelceted: function () {
            console.log(this.allChoosed, 'allChoosed')
            this.allChoosed = this.allChoosed.map(item => {
                return item.id
            });

            let index = this.allChoosed.indexOf(this.selected);

            if (index !== -1) {
                this.allChoosed[index] = this.replaceId;
            }

            this.bookingHotelId = this.allChoosed;

            this.$modal.hide('replace-choosed-hotel');

            this.$emit('bookingHotelId', this.bookingHotelId);
            console.log(this.bookingHotelId, 'this.bookingHotelId[index]')
        },

        getHotelServices: function (hotelServices) {
            this.bookingId = hotelServices.reservation_data.hotel_services
        },
    }
}
</script>

<style scoped>
.none {
    display: none;
}
</style>
