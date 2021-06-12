@extends('layouts.app')
@section('head')
    <style>
        header {
            border-bottom: 0;
        }
    </style>
    <link rel="stylesheet" href="/css/datepicker.min.css">
@endsection
@section('content')
    <section class="gray-bg d-flex flex-wrap">

        <div class="gray-left-side">
            <div class="gray-left-side-content w-100">
                <div class="open-mobile-info d-md-none text-right mb-3">
                    <img src="/img/info-icon.svg" alt="" width="25">
                </div>

                <h2 class="title-h3 mb-5">Pick your Dates for the following</h2>
                <form action="" class="form-max-width">
                    @csrf
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="dates-div half">
                            <span> DZ</span>
                            <div>
                                <img src="/img/dz.svg" alt="">
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>


                        </div>
                        <div class="dates-div half">
                            <span> EZ</span>
                            <div>
                                <img src="/img/ez.svg" alt="">
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="dates-div mb-0">
                        <span> Overnight stay</span>
                        <div>
                            <img src="/img/calendar.svg" alt="">
                            <input type="text" class="datepicker" value="15.10.2019">
                        </div>
                    </div>
                    <a href="#" class="add">
                        <img src="/img/add.svg" alt="">
                        <span>Add another overnight</span>
                    </a>
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="dates-div half">
                            <span> DZ</span>
                            <div>
                                <img src="/img/dz.svg" alt="">
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>


                        </div>
                        <div class="dates-div half">
                            <span> EZ</span>
                            <div>
                                <img src="/img/ez.svg" alt="">
                                <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="dates-div mb-0">
                        <span> Meeting day</span>
                        <div>
                            <img src="/img/calendar.svg" alt="">
                            <input type="text" class="datepicker" value="16.10.2019">
                        </div>
                    </div>
                    <a href="#" class="add">
                        <img src="/img/add.svg" alt="">
                        <span>Add another meetingday</span>
                    </a>
                    <div class="dates-div select-date flex-sm-row flex-column">
                        <select name="" id="" class="select">
                            <option value="">Beachtour (€13)</option>
                            <option value="">Beachtour (€139)</option>
                        </select>
                        <div class="select d-flex align-items-center">
                            <img src="/img/calendar.svg" alt="">
                            <select name="" id="" class="date-select">
                                <option value="">15.10.2019</option>
                                <option value="">16.10.2019</option>
                            </select>
                        </div>

                    </div>
                    <button type="submit" class="btn-yellow mt-4">Next</button>
                </form>
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


            </div>
        </div>

    </section>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $('.datepicker').datepicker({
            autoclose: true,
            format: 'dd.mm.yyyy',
        });

    </script>
@endsection
