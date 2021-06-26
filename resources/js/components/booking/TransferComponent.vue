<template>
    <div>
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
            <div class="steps-content pb-5">
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
                            <div class="circle active">
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
                <h2 class="title-h3 mt-lg-0 mt-4">Transfer</h2>
                <h6 class="subtitle">Please select transfer</h6>
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
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="hotel-1" role="tabpanel" aria-labelledby="hotel-1-tab">
                        <div class="transfer">
                            <div class="d-flex align-items-start justify-content-between flex-wrap">
                                <h5 class="title pl-2">Arrival transfer</h5>
                                <button class="btn-yellow sm">Add new transfer</button>
                            </div>
                            <div class="transfer-box bg-white">
                                <div class="left-side">
                                    <div class="form-div place">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" placeholder="Start point">
                                    </div>
                                    <div class="form-group-div">
                                        <div class="form-div calendar">
                                            <input type="text" class="form-input form-input-bordered date-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Date">
                                        </div>
                                        <div class="form-div time">
                                            <input type="text" class="form-input form-input-bordered time-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Time">
                                        </div>
                                    </div>
                                    <div class="form-div username">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" placeholder="" value="12">
                                    </div>
                                </div>
                                <div class="arrows">
                                    <div class="one-way gray-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="right-side">
                                    <img src="/img/hotel.png" alt="">
                                    <div class="right-side-inputs py-0">
                                        <div class="form-div hotel">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Scandic Berlin">
                                        </div>
                                        <div class="form-div place">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Martion-Luter-Str. 1">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="transfer">

                            <div class="d-flex align-items-start justify-content-between flex-wrap">
                                <h5 class="title pl-2">Extra service transfer</h5>
                                <div>
                                    <input type="radio" data-transfer="one_way"
                                           name="extra_service_transfer_1">
                                    <label for="one_way_1">One way</label>
                                    <input type="radio" data-transfer="return"
                                           name="extra_service_transfer_1">
                                    <label for="return_1">Return</label>
                                    <input type="radio" data-transfer="back" name="extra_service_transfer_1">
                                    <label for="back_1">Back</label>
                                </div>
                            </div>
                            <div class="transfer-box">
                                <div class="left-side">
                                    <div class="form-div hotel">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" value="Scandic Berlin">
                                    </div>
                                    <div class="form-div place">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" value="Martion-Luter-Str. 1">
                                    </div>
                                </div>
                                <div class="arrows">
                                    <div class="one-way">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                    <div class="return">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.596" height="10.417"
                                             viewBox="0 0 21.596 10.417">
                                            <g id="Group_15968" data-name="Group 15968" transform="translate(0 0)">
                                                <g id="layer1" transform="translate(2.979)">
                                                    <path id="path9413"
                                                          d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                          transform="translate(-0.257 -292.234)" fill="#717171"/>
                                                </g>
                                                <g id="layer1-2" data-name="layer1"
                                                   transform="translate(18.617 10.417) rotate(180)">
                                                    <path id="path9413-2" data-name="path9413"
                                                          d="M.885,6.071H15.73L12.949,8.92c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.147.262A.835.835,0,0,0,13.535,0a.869.869,0,0,0-.586,1.489l2.788,2.849H.841A.867.867,0,0,0,.885,6.071Z"
                                                          transform="translate(0 0)" fill="#717171"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="back">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="right-side">
                                    <img src="/img/billiard.png" alt="">
                                    <div class="right-side-inputs">
                                        <div class="form-div hotel">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Scandic Berlin">
                                        </div>
                                        <div class="form-div place">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Martion-Luter-Str. 1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="/img/close.svg" alt="close" class="delete">
                        </div>

                        <div class="transfer">

                            <div class="d-flex align-items-start justify-content-between flex-wrap">
                                <h5 class="title pl-2">Extra service transfer</h5>
                                <div>
                                    <input type="radio" data-transfer="one_way"
                                           name="extra_service_transfer_2">
                                    <label for="one_way_2">One way</label>
                                    <input type="radio" data-transfer="return"
                                           name="extra_service_transfer_2">
                                    <label for="return_2">Return</label>
                                    <input type="radio" data-transfer="back" name="extra_service_transfer_2">
                                    <label for="back_2">Back</label>
                                </div>
                            </div>
                            <div class="transfer-box">
                                <div class="left-side">
                                    <div class="form-div hotel">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" value="Scandic Berlin">
                                    </div>
                                    <div class="form-div place">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" value="Martion-Luter-Str. 1">
                                    </div>
                                </div>
                                <div class="arrows">
                                    <div class="one-way">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                    <div class="return">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.596" height="10.417"
                                             viewBox="0 0 21.596 10.417">
                                            <g id="Group_15968" data-name="Group 15968" transform="translate(0 0)">
                                                <g id="layer1" transform="translate(2.979)">
                                                    <path id="path9413"
                                                          d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                          transform="translate(-0.257 -292.234)" fill="#717171"/>
                                                </g>
                                                <g id="layer1-2" data-name="layer1"
                                                   transform="translate(18.617 10.417) rotate(180)">
                                                    <path id="path9413-2" data-name="path9413"
                                                          d="M.885,6.071H15.73L12.949,8.92c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.147.262A.835.835,0,0,0,13.535,0a.869.869,0,0,0-.586,1.489l2.788,2.849H.841A.867.867,0,0,0,.885,6.071Z"
                                                          transform="translate(0 0)" fill="#717171"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="back">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="right-side">
                                    <img src="/img/tennis.png" alt="">
                                    <div class="right-side-inputs">
                                        <div class="form-div hotel">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Scandic Berlin">
                                        </div>
                                        <div class="form-div place">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Martion-Luter-Str. 1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="/img/close.svg" alt="close" class="delete">
                        </div>

                        <div class="transfer">
                            <div class="d-flex align-items-start justify-content-between flex-wrap">
                                <h5 class="title pl-2">Departure transfer</h5>
                                <button class="btn-yellow sm">Add new transfer</button>
                            </div>
                            <div class="transfer-box bg-white justify-content-start">
                                <div class="left-side">
                                    <div class="form-div place">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" placeholder="Start point">
                                    </div>
                                    <div class="form-group-div">
                                        <div class="form-div calendar">
                                            <input type="text" class="form-input form-input-bordered date-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Date">
                                        </div>
                                        <div class="form-div time">
                                            <input type="text" class="form-input form-input-bordered time-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Time">
                                        </div>
                                    </div>

                                </div>
                                <div class="arrows">
                                    <div class="one-way gray-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="left-side">
                                    <div class="form-div place">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" placeholder="Start point">
                                    </div>
                                    <div class="form-group-div">
                                        <div class="form-div calendar">
                                            <input type="text" class="form-input form-input-bordered date-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Date">
                                        </div>
                                        <div class="form-div time">
                                            <input type="text" class="form-input form-input-bordered time-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Time">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="hotel-2" role="tabpanel" aria-labelledby="hotel-2-tab">
                        <div class="transfer">
                            <div class="d-flex align-items-start justify-content-between flex-wrap">
                                <h5 class="title pl-2">Arrival transfer</h5>
                                <button class="btn-yellow sm">Add new transfer</button>
                            </div>
                            <div class="transfer-box bg-white">
                                <div class="left-side">
                                    <div class="form-div place">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" placeholder="Start point">
                                    </div>
                                    <div class="form-group-div">
                                        <div class="form-div calendar">
                                            <input type="text" class="form-input form-input-bordered date-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Date">
                                        </div>
                                        <div class="form-div time">
                                            <input type="text" class="form-input form-input-bordered time-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Time">
                                        </div>
                                    </div>
                                    <div class="form-div username">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" placeholder="" value="12">
                                    </div>
                                </div>
                                <div class="arrows">
                                    <div class="one-way gray-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="right-side">
                                    <img src="/img/hotel.png" alt="">
                                    <div class="right-side-inputs py-0">
                                        <div class="form-div hotel">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Scandic Berlin">
                                        </div>
                                        <div class="form-div place">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Martion-Luter-Str. 1">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="transfer">
                            <img src="/img/close.svg" alt="close" class="delete">
                            <div class="d-flex align-items-start justify-content-between flex-wrap">
                                <h5 class="title pl-2">Extra service transfer</h5>
                                <div>
                                    <input type="radio" id="one_way_2" data-transfer="one_way"
                                           name="extra_service_transfer_2">
                                    <label for="one_way_2">One way</label>
                                    <input type="radio" id="return_2" data-transfer="return"
                                           name="extra_service_transfer_2">
                                    <label for="return_2">Return</label>
                                    <input type="radio" id="back_2" data-transfer="back"
                                           name="extra_service_transfer_2">
                                    <label for="back_2">Back</label>
                                </div>
                            </div>
                            <div class="transfer-box">
                                <div class="left-side">
                                    <div class="form-div hotel">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" value="Scandic Berlin">
                                    </div>
                                    <div class="form-div place">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" value="Martion-Luter-Str. 1">
                                    </div>
                                </div>
                                <div class="arrows">
                                    <div class="one-way">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                    <div class="return">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.596" height="10.417"
                                             viewBox="0 0 21.596 10.417">
                                            <g id="Group_15968" data-name="Group 15968" transform="translate(0 0)">
                                                <g id="layer1" transform="translate(2.979)">
                                                    <path id="path9413"
                                                          d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                          transform="translate(-0.257 -292.234)" fill="#717171"/>
                                                </g>
                                                <g id="layer1-2" data-name="layer1"
                                                   transform="translate(18.617 10.417) rotate(180)">
                                                    <path id="path9413-2" data-name="path9413"
                                                          d="M.885,6.071H15.73L12.949,8.92c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.147.262A.835.835,0,0,0,13.535,0a.869.869,0,0,0-.586,1.489l2.788,2.849H.841A.867.867,0,0,0,.885,6.071Z"
                                                          transform="translate(0 0)" fill="#717171"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="back">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="right-side">
                                    <img src="/img/tennis.png" alt="">
                                    <div class="right-side-inputs">
                                        <div class="form-div hotel">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Scandic Berlin">
                                        </div>
                                        <div class="form-div place">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Martion-Luter-Str. 1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="transfer">
                            <img src="/img/close.svg" alt="close" class="delete">
                            <div class="d-flex align-items-start justify-content-between flex-wrap">
                                <h5 class="title pl-2">Extra service transfer</h5>
                                <div>
                                    <input type="radio" id="one_way_1" data-transfer="one_way"
                                           name="extra_service_transfer_1">
                                    <label for="one_way_1">One way</label>
                                    <input type="radio" id="return_1" data-transfer="return"
                                           name="extra_service_transfer_1">
                                    <label for="return_1">Return</label>
                                    <input type="radio" id="back_1" data-transfer="back"
                                           name="extra_service_transfer_1">
                                    <label for="back_1">Back</label>
                                </div>
                            </div>
                            <div class="transfer-box">
                                <div class="left-side">
                                    <div class="form-div hotel">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" value="Scandic Berlin">
                                    </div>
                                    <div class="form-div place">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" value="Martion-Luter-Str. 1">
                                    </div>
                                </div>
                                <div class="arrows">
                                    <div class="one-way">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                    <div class="return">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.596" height="10.417"
                                             viewBox="0 0 21.596 10.417">
                                            <g id="Group_15968" data-name="Group 15968" transform="translate(0 0)">
                                                <g id="layer1" transform="translate(2.979)">
                                                    <path id="path9413"
                                                          d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                          transform="translate(-0.257 -292.234)" fill="#717171"/>
                                                </g>
                                                <g id="layer1-2" data-name="layer1"
                                                   transform="translate(18.617 10.417) rotate(180)">
                                                    <path id="path9413-2" data-name="path9413"
                                                          d="M.885,6.071H15.73L12.949,8.92c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.147.262A.835.835,0,0,0,13.535,0a.869.869,0,0,0-.586,1.489l2.788,2.849H.841A.867.867,0,0,0,.885,6.071Z"
                                                          transform="translate(0 0)" fill="#717171"/>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="back">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="right-side">
                                    <img src="/img/billiard.png" alt="">
                                    <div class="right-side-inputs">
                                        <div class="form-div hotel">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Scandic Berlin">
                                        </div>
                                        <div class="form-div place">
                                            <input type="text" class="form-input form-input-bordered"
                                                   name="reservation_number" value="Martion-Luter-Str. 1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="transfer">
                            <div class="d-flex align-items-start justify-content-between flex-wrap">
                                <h5 class="title pl-2">Departure transfer</h5>
                                <button class="btn-yellow sm">Add new transfer</button>
                            </div>
                            <div class="transfer-box bg-white justify-content-start">
                                <div class="left-side">
                                    <div class="form-div place">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" placeholder="Start point">
                                    </div>
                                    <div class="form-group-div">
                                        <div class="form-div calendar">
                                            <input type="text" class="form-input form-input-bordered date-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Date">
                                        </div>
                                        <div class="form-div time">
                                            <input type="text" class="form-input form-input-bordered time-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Time">
                                        </div>
                                    </div>

                                </div>
                                <div class="arrows">
                                    <div class="one-way gray-bg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18.617" height="10.417"
                                             viewBox="0 0 18.617 10.417">
                                            <path
                                                d="M1.142,298.305H15.987l-2.781,2.849c-.8.818.4,2.046,1.2,1.227l2.533-2.6,1.691-1.735a.881.881,0,0,0,0-1.221L14.4,292.5a.835.835,0,0,0-.612-.262.869.869,0,0,0-.586,1.489l2.788,2.849H1.1a.867.867,0,0,0,.044,1.733Z"
                                                transform="translate(-0.257 -292.234)"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="left-side">
                                    <div class="form-div place">
                                        <input type="text" class="form-input form-input-bordered"
                                               name="reservation_number" placeholder="Start point">
                                    </div>
                                    <div class="form-group-div">
                                        <div class="form-div calendar">
                                            <input type="text" class="form-input form-input-bordered date-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Date">
                                        </div>
                                        <div class="form-div time">
                                            <input type="text" class="form-input form-input-bordered time-picker"
                                                   autocomplete="off"
                                                   name="reservation_number" placeholder="Time">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right pb-5">
                    <button @click="$emit('nextPage', 5)" class="btn-yellow dark" data-toggle="modal"
                            data-target="#errorModal">Skip
                    </button>
                    <button @click="$emit('nextPage', 5)" class="btn-yellow" data-toggle="modal"
                            data-target="#errorModal">Next
                    </button>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    name: "TransferComponent"
}
</script>

<style scoped>

</style>
