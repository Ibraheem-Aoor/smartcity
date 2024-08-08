@extends('layouts.site.master')
@section('title', 'Core Services')
@section('page-header')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb"
        style="background-image: url(https://img.freepik.com/premium-photo/minimalist-pop-art-single-massive-japanese-skyscraper_579873-15193.jpg?ga=GA1.1.1266518853.1715856292&semt=ais_hybrid);">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">{{ 'Core Services' }}</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white">{{ 'Core Services' }}</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
@endsection
@section('content')
    <!-- Core Services Start -->
    <div class="container-fluid destination py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Our Core</h5>
                <h1 class="mb-0">Services</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill"
                            href="#tab-1">
                            <span class="text-dark" style="width: 150px;">All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-2">
                            <span class="text-dark" style="width: 150px;">undergraduate</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-3">
                            <span class="text-dark" style="width: 150px;">postgraduate</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-4">
                            <span class="text-dark" style="width: 150px;">doctoral programs.</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-5">
                            <span class="text-dark" style="width: 150px;">Diploma</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                            href="#tab-6">
                            <span class="text-dark" style="width: 150px;">Category</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-xl-8">
                                <div class="row g-4">
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('assets/site/img/destination-1.jpg') }}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Programs</a>
                                                <h4 class="text-white mb-2 mt-3">New York City</h4>
                                                <a href="#" class="btn-hover text-white">Apply Now <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('assets/site/img/destination-1.jpg') }}"
                                                    data-lightbox="destination-1"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('assets/site/img/destination-2.jpg') }}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Programs</a>
                                                <h4 class="text-white mb-2 mt-3">Las vegas</h4>
                                                <a href="#" class="btn-hover text-white">Apply Now <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('assets/site/img/destination-2.jpg') }}"
                                                    data-lightbox="destination-2"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('assets/site/img/destination-7.jpg') }}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Programs</a>
                                                <h4 class="text-white mb-2 mt-3">Demo Content</h4>
                                                <a href="#" class="btn-hover text-white">Apply Now <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('assets/site/img/destination-7.jpg') }}"
                                                    data-lightbox="destination-7"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="destination-img">
                                            <img class="img-fluid rounded w-100"
                                                src="{{ asset('assets/site/img/destination-8.jpg') }}" alt="">
                                            <div class="destination-overlay p-4">
                                                <a href="#"
                                                    class="btn btn-primary text-white rounded-pill border py-2 px-3">20
                                                    Programs</a>
                                                <h4 class="text-white mb-2 mt-3">Demo Content</h4>
                                                <a href="#" class="btn-hover text-white">Apply Now <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                            <div class="search-icon">
                                                <a href="{{ asset('assets/site/img/destination-8.jpg') }}"
                                                    data-lightbox="destination-8"><i
                                                        class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="destination-img h-100">
                                    <img class="img-fluid rounded w-100 h-100"
                                        src="{{ asset('assets/site/img/destination-9.jpg') }}"
                                        style="object-fit: cover; min-height: 300px;" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-9.jpg') }}"
                                            data-lightbox="destination-4"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-4.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">Demo Content</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-4.jpg') }}"
                                            data-lightbox="destination-4"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">Demo Content</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-5.jpg') }}"
                                            data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">Demo Content</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-6.jpg') }}"
                                            data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-5.jpg') }}"
                                            data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-6.jpg') }}"
                                            data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-5.jpg') }}"
                                            data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-6.jpg') }}"
                                            data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-5.jpg') }}"
                                            data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-6.jpg') }}"
                                            data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-5" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-5.jpg') }}"
                                            data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-6.jpg') }}"
                                            data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-6" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-5.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-5.jpg') }}"
                                            data-lightbox="destination-5"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="destination-img">
                                    <img class="img-fluid rounded w-100"
                                        src="{{ asset('assets/site/img/destination-6.jpg') }}" alt="">
                                    <div class="destination-overlay p-4">
                                        <a href="#"
                                            class="btn btn-primary text-white rounded-pill border py-2 px-3">20 Programs</a>
                                        <h4 class="text-white mb-2 mt-3">San francisco</h4>
                                        <a href="#" class="btn-hover text-white">Apply Now <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{ asset('assets/site/img/destination-6.jpg') }}"
                                            data-lightbox="destination-6"><i
                                                class="fa fa-plus-square fa-1x btn btn-light btn-lg-square text-primary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Core Services End -->

@endsection
