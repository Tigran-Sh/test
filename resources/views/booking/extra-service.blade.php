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
                        <div class="cal"></div>
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

@section('scripts')
    <script>
        var cal = new Cal('.cal');

        function Cal(el) {
            let months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            let weekDays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            let today = new Date();
            let calendar = {};
            // accept HTMLElement or Selector
            if (el instanceof HTMLElement) {
                calendar.wrapper = el;
            } else {
                calendar.wrapper = document.querySelector(el);
            }
            if (!calendar.wrapper) {
                console.log("Calendar Error: Invalid Selector or Element!");
                return false;
            }
            calendar.wrapper.classList.add("calendar-wrapper");
            /*   by Default the first day of the week is Monday  */
            calendar.firstDayInTheWeek = 0;
            calendar.date = today;
            calendar.events = [];
            calendar.specialClasses = [];
            renderCalendar();
            var cal = {
                el: _ => calendar.wrapper,
                refresh: _ => {
                    calendar.builded = false;
                    renderCalendar()
                },
                prevMonth: _ => goToMonth("prev"),
                nextMonth: _ => goToMonth("next"),
                setFirstDayInTheWeek: n => {
                    if (isNaN(n) || n > 6 || n < 0) return;
                    calendar.firstDayInTheWeek = n;
                    calendar.builded = false;
                    renderCalendar();
                },
                goToDate: goToDate
            };

            return cal;

            function renderCalendar() {
                if (calendar.builded == true) {
                    updateMonthName();
                    calendar.wrapper.removeChild(calendar.daysWrapper);
                } else {
                    calendar.wrapper.innerHTML = "";
                    fillMonthName();
                    fillDaysNames();
                }
                updateDays();
                fillDays();
            }

            function goToDate(d) {
                let dt = checkDate(d);
                if (dt) {
                    calendar.date = dt;
                    renderCalendar();
                }
            }

            function goToMonth(dir) {
                let M = calendar.date.getMonth();
                let d = dir == "next" ? M + 1 : dir == "prev" ? M - 1 : null;
                if (d === null) return;
                calendar.date = new Date(calendar.date.getFullYear(), d, 1);
                renderCalendar();
            }

            function updateDays() {
                let date = calendar.date;
                let thisYear = date.getFullYear();
                let thisMonth = date.getMonth();
                let thisMonthLength = (new Date(thisYear, thisMonth + 1, 0)).getDate();
                let lastMonthLength = (new Date(thisYear, thisMonth, 0)).getDate();
                let firstDayInMonth = (new Date(thisYear, thisMonth, 1)).getDay();
                if (firstDayInMonth - calendar.firstDayInTheWeek >= 0) {
                    firstDayInMonth = firstDayInMonth - calendar.firstDayInTheWeek;
                } else {
                    firstDayInMonth = 7 + firstDayInMonth - calendar.firstDayInTheWeek;
                }
                let days = [];
                // fill days from the previous month
                for (let i = firstDayInMonth; i > 0; i--) {
                    days.push({
                        day: lastMonthLength - i + 1,
                        month: thisMonth - 1 < 0 ? 11 : thisMonth - 1,
                        year: thisMonth !== 0 ? thisYear : thisYear - 1,
                        class: "prev-month"
                    });
                }
                // fill current month days
                for (let i = 1; i <= thisMonthLength; i++) {
                    days.push({
                        day: i,
                        month: thisMonth,
                        year: thisYear,
                        class: "this-month"
                    });
                }
                // fill days from the previous month
                for (let i = 0; i < days.length % 7; i++) {
                    days.push({
                        day: i + 1,
                        month: (thisMonth + 1) % 12,
                        year: thisMonth !== 11 ? thisYear : thisYear + 1,
                        class: "next-month"
                    });
                }
                calendar.days = days;
            }

            function fillMonthName() {
                let div = document.createElement("div");
                div.classList.add("month-name-wrapper");
                let btn_prev = document.createElement("button");
                let btn_next = document.createElement("button");
                btn_prev.innerText = "prev";
                btn_prev.classList.add("btn-prev-month");
                btn_next.classList.add("btn-next-month");
                btn_next.innerText = "next";
                div.appendChild(btn_prev);
                div.appendChild(btn_next);
                calendar.wrapper.appendChild(div);
                btn_next.addEventListener("click", _ => goToMonth("next"));
                btn_prev.addEventListener("click", _ => goToMonth("prev"));
                calendar.builded = true;
            }

            function fillDaysNames() {
                let div = document.createElement("div");
                div.classList.add("days-names-wrapper");
                let j = calendar.firstDayInTheWeek;
                for (let i = 0; i < 7; i++) {
                    let day = document.createElement("div");
                    day.classList.add("day-name");
                    day.innerHTML = weekDays[j];
                    div.appendChild(day);
                    if (j >= 6) {
                        j = 0;
                    } else {
                        j++;
                    }
                }
                calendar.daysNameWrapper = div;
                calendar.wrapper.appendChild(div);
            }

            function fillDays() {
                let div = document.createElement("div");
                div.classList.add("days-wrapper");
                for (let i = 0; i < calendar.days.length; i++) {
                    let day = document.createElement("div");
                    day.classList.add("day");
                    day.setAttribute(
                        "title",
                        calendar.days[i].year + "-" + (calendar.days[i].month + 1) + "-" + calendar.days[i].day
                    );
                    day.innerHTML = calendar.days[i].day;
                    day.classList.add(calendar.days[i].class);
                    div.appendChild(day);
                }
                calendar.daysWrapper = div;
                calendar.wrapper.appendChild(div);
            }
        }

        $('.day.this-month').click(function () {
            $(this).toggleClass('choosed-date')
        })

    </script>
@endsection
