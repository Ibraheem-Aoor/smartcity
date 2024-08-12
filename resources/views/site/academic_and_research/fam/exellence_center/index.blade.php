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
                    <li class="breadcrumb-item active text-white"><a href="{{ route('page', 'british-fam-college') }}">{{ $page->theme }}</a></li>
                    <li class="breadcrumb-item active text-white">{{ $page->title }}</li>

                </ol>
        </div>
    </div>
    <!-- Header End -->
@endsection
@section('content')
    {!! $page->content !!}
    <div class="container-fluid project py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s"
                style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <p class="text-uppercase text-primary fs-5 mb-0">Our Projects</p>
                <h2 class="display-4 text-capitalize mb-3">Recent Completed Projects</h2>
            </div>
            @foreach ($projects as $project)
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="project-item">
                            <div class="row g-4">
                                <div class="col-md-4">
                                    <div class="project-img">
                                        <img src="{{ getImageUrl($project->image) }}" class="img-fluid w-100 pt-3 ps-3" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="project-content mb-4">
                                        <p class="fs-5 text-primary mb-2">{{ $project->category->name }}</p>
                                        <a href="#" class="h4">{{ $project->name }}</a>
                                        <p class="mb-0 mt-3">{{ Str::limit($project->desciptionm , 30   , '...') }}</p>
                                    </div>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        {{-- <a class="btn btn-secondary py-3 px-5" href="#">More Projects</a> --}}
                    </div>
                </div>
            @endforeach

        </div>
    </div>

@endsection
