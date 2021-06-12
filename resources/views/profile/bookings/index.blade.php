@extends('layouts.app')
@section('head')
    <link href="{{ mix('css/profile.css') }}" rel="stylesheet">

@endsection

@section('content')

    <section class="gray-bg d-flex">

        @include('profile.profile_nav')
        <div class="profile-right-side requests">

            <h2 class="title-h3">{{__('My Meetings')}}</h2>
            <form class="filters">
                <select name="" id="">
                    <option value="">Location</option>
                </select>
                <select name="" id="">
                    <option value="">Package</option>
                </select>
                <select name="" id="">
                    <option value="">Date</option>
                </select>
                <select name="" id="">
                    <option value="">Status</option>
                </select>
                <button class="btn-yellow dark-50 sm">Apply</button>
            </form>
            <div class="table-responsive mobile-table request-table">
                <table class="table">
                    <thead>
                    <tr>
                        <th>{{__('Package Name')}}</th>
                        <th>{{__('Location')}}</th>
                        {{--                            <th class="text-lg-center">{{__('Number of people')}}</th>--}}
                        <th class="text-lg-center">{{__('Date')}}</th>
                        <th>{{__('Status')}}</th>
                        {{--                            <th class="text-lg-center">{{__('Invoice')}}</th>--}}
                        <th class="text-lg-center">{{__('Action')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row" data-label="{{__('Package Name')}}">
                            <input class="border-0" type="text" value="Sustainability">
                        </td>
                        <td data-label="{{__('Location')}}">Berlin</td>
                        {{--                            <td data-label="{{__('Number of people')}}" class="text-center">5</td>--}}
                        <td class="text-lg-center" data-label="{{__('Date')}}">21.01-23.01</td>

                        <td data-label="{{__('Status')}}" class="text-green">
                            <img src="/img/check.svg" alt="">
                            accepted
                        </td>
                        {{--                            <td data-label="{{__('Invoice')}}" class="text-center">--}}
                        {{--                                <img src="/img/pdf.svg" alt="">--}}
                        {{--                            </td>--}}
                        <td data-label="{{__('Action')}}" class="text-lg-center">
                                <span class=" d-flex align-items-center justify-content-lg-center justify-content-end">
                                    <a href="#"><img src="/img/edit-gray.svg" alt="" class="mr-3"></a>
                                    <a href="#"><img src="/img/eye.svg" alt="" class="mr-3"></a>
                                    <a href="#"><img src="/img/file.svg" alt=""></a>
                                </span>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="{{__('Package Name')}}">
                            <input class="border-0" type="text" value="Teamspirit">
                        </td>
                        <td data-label="{{__('Location')}}">Berlin</td>
                        <td class="text-lg-center" data-label="{{__('Date')}}">21.01-23.01</td>

                        <td data-label="{{__('Status')}}">
                            <img src="/img/time.svg" alt="">
                            pending
                        </td>
                        {{--                            <td data-label="{{__('Invoice')}}" class="text-center">--}}
                        {{--                                <img src="/img/pdf.svg" alt="">--}}
                        {{--                                <span></span>--}}
                        {{--                            </td>--}}
                        <td data-label="{{__('Action')}}" class="text-lg-center">
                                <span class=" d-flex align-items-center justify-content-lg-center justify-content-end">
                                    <a href="#"><img src="/img/edit-gray.svg" alt="" class="mr-3"></a>
                                    <a href="#"><img src="/img/eye.svg" alt="" class="mr-3"></a>
                                    <a href="#"><img src="/img/file.svg" alt=""></a>
                                </span>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection



