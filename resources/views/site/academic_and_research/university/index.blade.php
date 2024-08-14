@extends('layouts.site.master')
@push('css')
    <style>
        .service .service-item {
            position: relative;
            overflow: hidden
        }

        .service .service-item .service-inner .service-title {
            position: relative;
            margin-top: -30px;
            text-align: center;
            transition: .5s
        }

        .service .service-item .service-inner .service-title .service-content {
            position: absolute;
            bottom: -100%;
            left: 0;
            margin-left: 30px;
            margin-right: 30px;
            text-align: center;
            border-radius: 10px;
            background: var(--bs-primary);
            opacity: 0;
            transition: .5s
        }

        .service .service-item:hover .service-inner .service-title .service-content {
            bottom: 0;
            opacity: 1
        }

        .service .service-item .service-inner .service-title .service-content a h4 {
            border-bottom: 1px solid rgba(256, 256, 256, .1)
        }

        .service .service-item .service-inner .service-title .service-title-name {
            transition: .5s
        }

        .service .service-item:hover .service-inner .service-title .service-title-name {
            opacity: 0
        }

        .service .service-item .service-inner .service-img {
            position: relative;
            border-radius: 10px;
            overflow: hidden
        }

        .service .service-item .service-inner .service-img::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 0;
            border-radius: 10px;
            background: rgba(255, 255, 255, .5);
            transition: .5s;
            opacity: 0
        }

        .service .service-item:hover .service-inner .service-img::after {
            height: 100%;
            opacity: 1
        }

        .service .service-item .service-inner .service-img img {
            transition: .5s
        }

        .service .service-item:hover .service-inner .service-img img {
            transform: scale(1.3)
        }
    </style>
@endpush
@section('title', $page->title)
@section('page-header')
    @php
        $main_image = isset($page->intro_image)
            ? getImageUrl($page->intro_image)
            : asset(
                'https://img.freepik.com/free-photo/business-people-futuristic-business-environment_23-2150970218.jpg?t=st=1722886674~exp=1722890274~hmac=a804d3c39a6daf24955b7867c6630263a485e13c1e95930a80e38c17dcb9c93b&w=1060',
            );
    @endphp
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb" style="background-image: url({{ $main_image }});">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">{{ $page->title }}</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white">{{ $page->theme }}</li>
                    <li class="breadcrumb-item active text-white">{{ $page->title }}</li>

                </ol>
        </div>
    </div>
    <!-- Header End -->
@endsection
@section('content')
    <div class="container-fluid service overflow-hidden py-5">
        <div class="container">
            <div class="mx-auto text-center" style="max-width: 900px;">
                <h5 class="section-title px-3">{{ $page->title }}</h5>
                <h1 class="mb-4">Explore Our {{ $page->title }}</h1>
            </div>
            <div class="row g-4">
                @foreach ($universities as $university)
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <div class="service-item">
                            <div class="service-inner">
                                <div class="service-img">
                                    <img src="{{ getImageUrl($university->image) }}"
                                        class="img-fluid w-100 rounded" alt="Image">
                                </div>
                                <div class="service-title">
                                    <div class="service-title-name">
                                        <div class="bg-primary text-center rounded p-3 mx-5 mb-4">
                                            <a href="#" class="h4 text-white mb-0">{{ $university->name }}</a>
                                        </div>
                                        <a class="btn bg-light text-secondary rounded-pill py-3 px-5 mb-4 d-none"
                                            href="#">Explore
                                            More</a>
                                    </div>
                                    <div class="service-content pb-4">
                                        <a href="#">
                                            <h4 class="text-white mb-4 py-3">{{ $university->name }}</h4>
                                        </a>
                                        <div class="px-4">
                                            <p class="mb-4">{{ $university->description }}</p>
                                            <a class="btn btn-primary border-secondary rounded-pill text-white py-3 px-5"
                                                href="#">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection
