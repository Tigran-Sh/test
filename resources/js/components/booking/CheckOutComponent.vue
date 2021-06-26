<template>
    <section class="gray-bg">
        <div class="steps-content pb-5 mb-5">
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
                        <div class="circle passed">
                            <img src="/img/checkmark-white.svg" alt="">
                        </div>
                        <p class="title">Extra Service</p>
                        <div class="line active"></div>
                    </div>
                    <div class="d-flex align-items-center position-relative">
                        <div class="line active"></div>
                        <div class="circle passed">
                            <img src="/img/checkmark-white.svg" alt="">
                        </div>
                        <p class="title">Transfer</p>
                        <div class="line active"></div>
                    </div>
                    <div class="d-flex align-items-center position-relative">
                        <div class="line"></div>
                        <div class="circle active">
                            5
                        </div>
                        <p class="title">Check out</p>
                        <div class="line bg-transparent"></div>
                    </div>
                </div>
                <button class="btn-icon" data-toggle="modal" data-target="#packageInfoModal">
                    <img src="/img/info.svg" alt="information" width="24">
                    <span>Package information</span>
                </button>
            </div>
            <h2 class="title-h3 mt-lg-0 mt-4 mb-4">Check out</h2>
            <div class="sidebar-info border-bottom-0">
                <h6 class="title mb-4">Package information</h6>
                <div class="d-flex align-items-start sidebar-info-div">
                    <span class="text-dark">Region</span>
                    <span>Munich</span>
                </div>
                <div class="d-flex align-items-start sidebar-info-div">
                    <span class="text-dark">Package name</span>
                    <span>Sustainability</span>
                </div>
                <div class="d-flex align-items-start sidebar-info-div">
                    <span class="text-dark">Date</span>
                    <span>15.10.2019</span>
                </div>
                <div class="d-flex align-items-start sidebar-info-div">
                    <span class="text-dark">Participants</span>
                    <span>5</span>
                </div>
                <div class="d-flex align-items-start sidebar-info-div">
                    <span class="text-dark">Rooms</span>
                    <span>2 DZ &#183; 1 EZ</span>
                </div>

            </div>
            <div class="check-out-options">
                <div class="d-flex flex-sm-row flex-column">
                    <div>
                        <div class="options-header">
                            <button class="btn-yellow dark sm"></button>
                        </div>
                        <div class="options-body">
                            <h5 class="title">Hotel</h5>
                            <div class="location-box">

                                <div class="location-image">
                                    <img src="/img/map.svg" alt="map" class="location-map">
                                    <img src="/img/hotel.png" alt="" class="img-fluid">
                                </div>

                                <div class="location-text">
                                    <div class="stars mb-3">
                                        <img src="/img/star.svg" alt="star">
                                        <img src="/img/star.svg" alt="star">
                                        <img src="/img/star.svg" alt="star">
                                        <img src="/img/star.svg" alt="star">
                                        <img src="/img/star.svg" alt="star">
                                    </div>
                                    <h5 class="location-title mt-0">Scandic Berlin Potsdamer Platz</h5>
                                </div>


                            </div>
                            <h5 class="title">Hotel Service</h5>
                            <div class="location-box">

                                <div class="location-image">
                                    <img src="/img/swimming.png" alt="" class="img-fluid">
                                </div>

                                <div class="location-text">

                                    <h5 class="location-title mt-0">Swimming</h5>
                                    <div class="d-flex align-items-end flex-sm-row flex-column">
                                        <div class="location-description mb-3">
                                            This eco-friendly modern hotel is located beside the Potsdamer Platz
                                            entertainment.
                                        </div>
                                    </div>

                                </div>


                            </div>
                            <h5 class="title">Extra Service</h5>
                            <div class="location-box">

                                <div class="location-image">
                                    <img src="/img/billiard.png" alt="" class="img-fluid">
                                </div>

                                <div class="location-text">

                                    <h5 class="location-title mt-0">Billiard</h5>
                                    <div class="d-flex align-items-end flex-sm-row flex-column">
                                        <div class="location-description mb-3">
                                            This eco-friendly modern hotel is located beside the Potsdamer Platz
                                            entertainment.
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>

                    </div>
                </div>

                <div class="text-center pb-5">
                    <a href="#" class="btn-yellow">Submit</a>
                </div>
            </div>

        </div>
    </section>
</template>

<script>
import axios from 'axios';

export default {
    name: "CheckOutComponent",
    props: ['booking'],
    data() {
        return {
            options: []
        }
    },
    created() {
        this.getOptions();
        console.log(this.options)
    },
    methods: {
        getOptions: function () {
            axios.post('/api/get-chooses-options', this.booking.reservation_data)
                .then(response => {
                    return this.options = response.data
                });
        }
    },
}
</script>

<style scoped>

</style>
