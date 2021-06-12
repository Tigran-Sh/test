@extends('layouts.app')
@section('content')
    <section class="meeting-packages">
        <h2 class="title-h3 mb-5">{{$page->data->title}}</h2>
        {!! $page->data->content !!}
    </section>
    <section class="gray-bg">
        @include('layouts.parts._testimonials')
    </section>
@endsection
