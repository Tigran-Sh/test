@extends('layouts.app')
@section('head')
    <link href="{{ mix('css/profile.css') }}" rel="stylesheet">

@endsection

@section('content')

    <section class="gray-bg d-flex">

        @include('profile.profile_nav')
        <div class="profile-right-side notifications">
            <h2 class="title-h3">{{__('Notifications')}}</h2>
            <div class="form-checkbox d-flex">
                <input type="checkbox" id="mark_as_read_all">
                <label for="mark_as_read_all" class="ml-auto">Mark as read</label>
            </div>
            <div>
                <div class="notification-box">
                    <div class="form-checkbox">
                        <input type="checkbox" id="mark_as_read">
                        <label for="mark_as_read"></label>
                    </div>

                    <div class="notification-title">Package Name</div>
                    <div class="notification-text">We take your account security seriously and wanted We take your
                        account security seriously and wanted
                    </div>
                    <div class="notification-time">14:51</div>
                    <div class="notification-actions">
                        <a href="#" title="Show"><img src="/img/eye.svg" alt="eye"></a>
                        <a href="#" title="Delete" class="ml-4"><img src="/img/trash.svg" alt="trash"></a>
                    </div>
                </div>
                <div class="notification-box">
                    <div class="form-checkbox">
                        <input type="checkbox" id="mark_as_read">
                        <label for="mark_as_read"></label>
                    </div>

                    <div class="notification-title">Package Name</div>
                    <div class="notification-text">We take your account security seriously and wanted We take your
                        account security seriously and wanted
                    </div>
                    <div class="notification-time">14:51</div>
                    <div class="notification-actions">
                        <a href="#" title="Show"><img src="/img/eye.svg" alt="eye"></a>
                        <a href="#" title="Delete" class="ml-4"><img src="/img/trash.svg" alt="trash"></a>
                    </div>
                </div>
                <div class="notification-box">
                    <div class="form-checkbox">
                        <input type="checkbox" id="mark_as_read">
                        <label for="mark_as_read"></label>
                    </div>

                    <div class="notification-title">Package Name</div>
                    <div class="notification-text">We take your account security seriously and wanted We take your
                        account security seriously and wanted
                    </div>
                    <div class="notification-time">14:51</div>
                    <div class="notification-actions">
                        <a href="#" title="Show"><img src="/img/eye.svg" alt="eye"></a>
                        <a href="#" title="Delete" class="ml-4"><img src="/img/trash.svg" alt="trash"></a>
                    </div>
                </div>
                <div class="notification-box">
                    <div class="form-checkbox">
                        <input type="checkbox" id="mark_as_read">
                        <label for="mark_as_read"></label>
                    </div>

                    <div class="notification-title">Package Name</div>
                    <div class="notification-text">We take your account security seriously and wanted We take your
                        account security seriously and wanted
                    </div>
                    <div class="notification-time">14:51</div>
                    <div class="notification-actions">
                        <a href="#" title="Show"><img src="/img/eye.svg" alt="eye"></a>
                        <a href="#" title="Delete" class="ml-4"><img src="/img/trash.svg" alt="trash"></a>
                    </div>
                </div>
                <div class="notification-box">
                    <div class="form-checkbox">
                        <input type="checkbox" id="mark_as_read">
                        <label for="mark_as_read"></label>
                    </div>

                    <div class="notification-title">Package Name</div>
                    <div class="notification-text">We take your account security seriously and wanted We take your
                        account security seriously and wanted
                    </div>
                    <div class="notification-time">14:51</div>
                    <div class="notification-actions">
                        <a href="#" title="Show"><img src="/img/eye.svg" alt="eye"></a>
                        <a href="#" title="Delete" class="ml-4"><img src="/img/trash.svg" alt="trash"></a>
                    </div>
                </div>
                <div class="notification-box">
                    <div class="form-checkbox">
                        <input type="checkbox" id="mark_as_read">
                        <label for="mark_as_read"></label>
                    </div>

                    <div class="notification-title">Package Name</div>
                    <div class="notification-text">We take your account security seriously and wanted We take your
                        account security seriously and wanted
                    </div>
                    <div class="notification-time">14:51</div>
                    <div class="notification-actions">
                        <a href="#" title="Show"><img src="/img/eye.svg" alt="eye"></a>
                        <a href="#" title="Delete" class="ml-4"><img src="/img/trash.svg" alt="trash"></a>
                    </div>
                </div>
                <div class="notification-box">
                    <div class="form-checkbox">
                        <input type="checkbox" id="mark_as_read">
                        <label for="mark_as_read"></label>
                    </div>

                    <div class="notification-title">Package Name</div>
                    <div class="notification-text">We take your account security seriously and wanted We take your
                        account security seriously and wanted
                    </div>
                    <div class="notification-time">14:51</div>
                    <div class="notification-actions">
                        <a href="#" title="Show"><img src="/img/eye.svg" alt="eye"></a>
                        <a href="#" title="Delete" class="ml-4"><img src="/img/trash.svg" alt="trash"></a>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection



