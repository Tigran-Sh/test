@extends('layouts.app')

@section('head')
    <style>
        header, footer.d-flex{
            display: none!important;
        }
    </style>
@endsection()
@section('content')


<div class="error-page text-center">
    <img src="/img/404.svg" alt="404" class="img-fluid">
    <h1 class="title"> Page Not Found</h1>
    <h2 class="subtitle">We're sorry, the page you requested not be found.</h2>
    <h2 class="subtitle">Please go back to the homepage</h2>
    <a href="/" class="btn-yellow"> Go Home</a>
</div>
@endsection
