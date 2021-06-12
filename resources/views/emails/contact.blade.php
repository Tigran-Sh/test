@extends('emails.layouts.app')
@section('content')
    <h1>{{__('Hi')}} Admin</h1>
    <p><b>{{__('Name')}}:</b> {{$data['name']}}</p>
    <p><b>{{__('Email')}}:</b> {{$data['email']}}</p>
    <p><b>{{__('Subject')}}:</b> {{$data['subject']}}</p>
    <p><b>{{__('Message')}}:</b> {{$data['message']}}</p>
@endsection
