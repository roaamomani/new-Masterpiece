@extends('landing_page.layouts.master')
@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('Home') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">About</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">About Us</h4>
                    <h1 class="display-5 mb-4">Discover Your Strength with Our Best Muscle Workouts</h1>
                    <p class="mb-4">We are here to help you achieve your fitness goals with customized workout programs tailored to all levels. Join us for optimal physical fitness.</p>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="fas fa-dumbbell fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Strength Training</h4>
                                    <p>We offer a variety of strength training exercises to build muscle and increase endurance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="bi bi-heart-pulse fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Years of Expertise</h4>
                                    <p>Our team has extensive experience in fitness and nutrition.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('services.index') }}" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Call Us</h4>
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;">+962 0987890878</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="{{ asset('landing/img/recent-2.jpg') }}" class="img-fluid rounded w-100" alt="Fitness Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@stop
