@extends('emails.layouts.app')
@section('content')
    <h1>Hi {{ $name }},</h1>
    <p>welcome in Meeteam platform. Below you will find your login information.</p>
    <h3>Login: {{ $email }}</h3>
    <h3>Password: {{ $password }}</h3>
    <h5>
        Kind regards, <br>
        Your meeteam team
    </h5>
    <div class="text-center">
        <a href="{{ env('APP_URL').'/login' }}" class="btn">Login</a>
    </div>
@endsection
