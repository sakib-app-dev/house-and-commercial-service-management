@extends('users.master')
@section('content')

    @include('users.slide')
    {{-- @include('users.ads') --}}
    @include('users.offer')
    @include('users.welcome_com')
    <hr>
    @include('users.testimonial')


@endsection 