<template>
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
                <span>Package information</span>
            </button>
        </div>

        <h2 class="title-h3 mt-lg-0 mt-4">Add extra services</h2>
        <ul class="nav nav-tabs custom-tabs" id="myTab" role="tablist">
            <li class="nav-item" v-for="item in hotel_for_extra_services.data" @click="getTab(item)">
                <a
                    v-if="booking.reservation_data.hotels.includes(item.id)"
                    class="nav-link"
                    :class="{'active': (extraServicesData.id === item.id)}"
                    @click="changeTab(item.id)"
                    :id="`hotel-${item.id}-tab`"
                    data-toggle="tab" :href="`#hotel-${item.id}`"
                    role="tab"
                    :aria-controls="`hotel-${item.id}`" aria-selected="false">{{ item.name }}</a>
            </li>
        </ul>
        <div class="tab-content pt-0" id="myTabContent">
            <div
                v-if="extraServicesData"
                class="tab-pane fade show active"
                id="hotel-1"
                role="tabpanel"
                aria-labelledby="hotel-1-tab">
                <div class="filters">
                    <select name="">
                        <option value="">Hotel service</option>
                    </select>
                    <select name="">
                        <option value="">Location</option>
                    </select>
                    <select name="">
                        <option value="">Price</option>
                    </select>
                    <select name="">
                        <option value="">Type</option>
                    </select>
                </div>
                <div class="d-lg-block d-flex flex-wrap">
                    <vue-loaders-ball-beat v-if="!extraServicesData.length" color="gray" class="m-auto" scale="1"></vue-loaders-ball-beat>

                    <div class="location-box" v-for="item in extraServicesData">
                        <div class="location-image">
                            <p>{{ item.images.url }}</p>
                            <img :src="'/storage/' + item.images[0].url"
                                 alt=""
                                 class="img-fluid">
                        </div>
                        <div class="location-text">

                            <h5 class="location-title mt-0">{{ item.data.name }}</h5>
                            <div class="location-description mb-1">
                                {{ item.data.description }}
                            </div>
                            <div class="location-info mb-2">
                                {{ item.data.payment_conditions }}
                            </div>
                            <div class="location-description mb-1">
                                {{ item.data.details }}
                            </div>
                            <div class="location-info mb-2">
                                {{ item.data.payment_conditions }}
                            </div>
                            <div class="text-right mt-auto">
                                <img v-if="choosedExtraServices.includes(item.id)" @click="chooseExtraService(item.id)"
                                     src="/img/selected.svg" alt="">

                                <button v-if="!choosedExtraServices.includes(item.id)" @click="chooseExtraService(item.id)"
                                        class="btn-yellow btn-yellow-outline mt-0">
                                    Choose
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--                    <div class="location-box">-->

                    <!--                        <div class="location-image">-->
                    <!--                            <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"-->
                    <!--                                 alt=""-->
                    <!--                                 class="img-fluid">-->
                    <!--                        </div>-->

                    <!--                        <div class="location-text">-->

                    <!--                            <h5 class="location-title mt-0">Billiard</h5>-->
                    <!--                            <div class="location-description mb-1">-->
                    <!--                                Scandic Berlin Potsdamer Platz-->
                    <!--                            </div>-->
                    <!--                            <div class="location-info mb-2">-->
                    <!--                                €72/ hour-->
                    <!--                            </div>-->
                    <!--                            <div class="location-description mb-1">-->
                    <!--                                Scandic Berlin Potsdamer Platz-->
                    <!--                            </div>-->
                    <!--                            <div class="location-info mb-2">-->
                    <!--                                €72/ hour-->
                    <!--                            </div>-->
                    <!--                            <div class="text-right mt-auto">-->
                    <!--                                <a href="#" class="btn-yellow btn-yellow-outline mt-0"> Choose</a>-->
                    <!--                            </div>-->
                    <!--                        </div>-->


                    <!--                    </div>-->
                    <!--                    <div class="location-box">-->

                    <!--                        <div class="location-image">-->
                    <!--                            <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"-->
                    <!--                                 alt=""-->
                    <!--                                 class="img-fluid">-->
                    <!--                        </div>-->

                    <!--                        <div class="location-text">-->

                    <!--                            <h5 class="location-title mt-0">Billiard</h5>-->
                    <!--                            <div class="location-description mb-1">-->
                    <!--                                Scandic Berlin Potsdamer Platz-->
                    <!--                            </div>-->
                    <!--                            <div class="location-info mb-2">-->
                    <!--                                €72/ hour-->
                    <!--                            </div>-->
                    <!--                            <div class="location-description mb-1">-->
                    <!--                                Scandic Berlin Potsdamer Platz-->
                    <!--                            </div>-->
                    <!--                            <div class="location-info mb-2">-->
                    <!--                                €72/ hour-->
                    <!--                            </div>-->
                    <!--                            <div class="text-right mt-auto">-->
                    <!--                                <a href="#" class="btn-yellow btn-yellow-outline mt-0"> Choose</a>-->
                    <!--                            </div>-->
                    <!--                        </div>-->


                    <!--                    </div>-->
                </div>
            </div>
            <!--            <div class="tab-pane fade" id="hotel-2" role="tabpanel" aria-labelledby="hotel-2-tab">-->
            <!--                <div class="filters">-->
            <!--                    <select name="">-->
            <!--                        <option value="">Hotel service</option>-->
            <!--                    </select>-->
            <!--                    <select name="">-->
            <!--                        <option value="">Location</option>-->
            <!--                    </select>-->
            <!--                    <select name="">-->
            <!--                        <option value="">Price</option>-->
            <!--                    </select>-->
            <!--                    <select name="">-->
            <!--                        <option value="">Type</option>-->
            <!--                    </select>-->
            <!--                </div>-->
            <!--                <div class="d-lg-block d-flex flex-wrap">-->
            <!--                    <div class="location-box">-->

            <!--                        <div class="location-image">-->
            <!--                            <img src="/img/young-smiling-men-women-playing-billiards-office-home-after-work.png"-->
            <!--                                 alt=""-->
            <!--                                 class="img-fluid">-->
            <!--                        </div>-->

            <!--                        <div class="location-text">-->

            <!--                            <h5 class="location-title mt-0">2rd</h5>-->
            <!--                            <div class="location-description mb-1">-->
            <!--                                Scandic Berlin Potsdamer Platz-->
            <!--                            </div>-->
            <!--                            <div class="location-info mb-2">-->
            <!--                                €72/ hour-->
            <!--                            </div>-->
            <!--                            <div class="location-description mb-1">-->
            <!--                                Scandic Berlin Potsdamer Platz-->
            <!--                            </div>-->
            <!--                            <div class="location-info mb-2">-->
            <!--                                €72/ hour-->
            <!--                            </div>-->
            <!--                            <div class="text-right mt-auto">-->
            <!--                                <a href="#" class="btn-yellow btn-yellow-outline mt-0"> Choose</a>-->
            <!--                            </div>-->
            <!--                        </div>-->


            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
        <div class="pb-5 mb-4">
            <a href="#" class="btn-yellow dark mt-5">Skip</a>

            <button @click="$emit('nextPage', 4)" class="btn-yellow" data-toggle="modal"
                    data-target="#errorModal">Next
            </button>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    name: "ExtraServiceComponent",
    props: ['extraServices', 'booking', 'hotel', 'hotels', 'hotel_for_extra_services'],
    data() {
        return {
            tabs: {},
            tabValue: '',
            extraServicesData: [],
            choosedExtraServices: []
        }
    },
    created() {
        this.changeTab(this.booking.reservation_data.hotels[0]);
    },
    methods: {
        getTab(item) {
            this.tabs = item
        },
        chooseExtraService: function(id){
            if(!this.choosedExtraServices.includes(id)){
                this.choosedExtraServices.push(id);
            }else{
                this.choosedExtraServices.splice(this.choosedExtraServices.indexOf(id), 1);
            }

            this.$emit('choosedExtraServices', this.choosedExtraServices);
        },

        changeTab(value) {
            this.extraServicesData = [];
            axios
                .get('/api/get-extra-service-data/' + value)
                .then(response => {
                    console.log(response.data, 'value')

                    return this.extraServicesData = response.data
                });
            console.log(this.hotel_for_extra_services, 'hotel_for_extra_services')
        }
    }
}
</script>

<style scoped>

</style>
