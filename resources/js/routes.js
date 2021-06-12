import Vue from 'vue'
import VueRouter from 'vue-router'
import HotelComponent from "./components/HotelComponent";

Vue.use(VueRouter)

const routes = [
    { path: '/hotel', component: HotelComponent },
];

export default new VueRouter({
    mode: "history",
    routes: routes
})
