@extends('front.master')

@section('title')
    {{$favicon->title ?? ''}}
@endsection

@section('content')

    <!-- Main Section start -->
    @include('front.home.include.home')
    <!-- Main Section end -->

    <!-- Features start -->
    @include('front.home.include.features')
    <!-- Features ends -->

    <!-- Stats start -->
    @include('front.home.include.achievement')
    <!-- Stats ends -->

    <!-- About start -->
    @include('front.home.include.about')
    <!-- About ends -->

    <!-- Phone starts -->
{{--    @include('front.home.include.company')--}}
    <!-- Phone ends -->

    <!-- Video start -->
    @include('front.home.include.video')
    <!-- Video ends -->

    <!-- Work Starts -->
    @include('front.home.include.work')
    <!-- Work ends -->

    <!-- Pricing start -->
    @include('front.home.include.pricing')
    <!-- Pricing ends -->

    <!-- Clients start -->
    @include('front.home.include.clients')
    <!-- Clients ends -->

    <!-- Blog start -->
    @include('front.home.include.blog')
    <!-- Blog ends -->

    <!-- Brands starts -->
    @include('front.home.include.brand')
    <!-- Brands ends -->

    <!-- Contact & Map starts -->
    @include('front.home.include.contact')
    <!-- Contact & Map ends -->

@endsection
