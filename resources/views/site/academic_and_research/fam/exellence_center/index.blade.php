@extends('layouts.site.master')
@push('css')
    <style>
        .service .service-item {
            border-radius: 10px
        }

        .service .service-item .service-img {
            position: relative;
            overflow: hidden;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px
        }

        .service .service-item .service-img img {
            transition: .5s
        }

        .service .service-item:hover .service-img img {
            transform: scale(1.1)
        }

        .service .service-item .service-img::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 0;
            top: 0;
            left: 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background: rgba(1, 95, 201, .2);
            transition: .5s;
            z-index: 1
        }

        .service .service-item:hover .service-img::after {
            height: 100%
        }

        .service .service-item .service-img .service-icon {
            position: absolute;
            width: 70px;
            bottom: 0;
            right: 25px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            background: white !important;
            ;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: .5s;
            z-index: 9
        }

        .service .service-item .service-img .service-icon i {
            color: var(--bs-primary);
            transition: .5s
        }

        .service .service-item:hover .service-img .service-icon i {
            transform: rotateX(360deg);
            color: white !important;
        }

        .service .service-item:hover .service-img .service-icon {
            bottom: 0;
            color: white !important;
            ;
            background: var(--bs-primary)
        }

        .service .service-content {
            position: relative;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            background: white !important;
        }

        .service .service-item .service-content .service-content-inner {
            position: relative;
            z-index: 9
        }

        .service .service-item .service-content .service-content-inner .h4,
        .service .service-item .service-content .service-content-inner p {
            transition: .5s
        }

        .service .service-item:hover .service-content .service-content-inner .h4,
        .service .service-item:hover .service-content .service-content-inner p {
            color: white !important;
        }

        .service .service-item:hover .service-content .service-content-inner .btn.btn-primary {
            color: var(--bs-primary);
            background: white !important;
        }

        .service .service-item:hover .service-content .service-content-inner .btn.btn-primary:hover {
            color: white !important;
            ;
            background: var(--bs-dark)
        }

        .service .service-item:hover .service-content .service-content-inner .h4:hover {
            color: var(--bs-dark)
        }

        .service .service-item .service-content::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 0;
            bottom: 0;
            left: 0;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            background: var(--bs-primary);
            transition: .5s;
            z-index: 1
        }

        .service .service-item:hover .service-content::after {
            height: 100%
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
                    <li class="breadcrumb-item active text-white"><a
                            href="{{ route('page', 'british-fam-college') }}">{{ $page->theme }}</a></li>
                    <li class="breadcrumb-item active text-white">{{ $page->title }}</li>

                </ol>
        </div>
    </div>
    <!-- Header End -->
@endsection
@section('content')
    {!! $page->content !!}
    <div class="container-fluid service py-5">

        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s"
                style="max-width: 800px; visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h4 class="text-primary">Our Excellence Center</h4>
                <h1 class="display-4 mb-4">Driving Innovation and Growth</h1>
                <p class="mb-0">At British FAM College's Excellence Center, we lead the way in pioneering projects that
                    bridge academic research with real-world applications. Our collaborations with industry leaders and
                    cutting-edge technology drive impactful solutions across various fields, from artificial intelligence to
                    sustainable development. We are committed to advancing knowledge and fostering growth through our
                    strategic initiatives and professional development programs.</p>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach ($projects as $project)
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ getImageUrl($project->category->image) }}" class="img-fluid rounded-top w-100"
                                    alt="">
                                <div class="service-icon p-3">
                                    <img src="{{ getImageUrl($project->image) }}" class="img-fluid" width="50px"
                                        height="50px" alt="">
                                </div>
                            </div>
                            <div class="service-content p-4">
                                <div class="service-content-inner">
                                    <a href="#" class="d-inline-block h4 mb-4"></a>
                                    <p class="mb-4">
                                        {{ $project->description }}
                                    </p>
                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="col-12 text-center wow fadeInUp d-none" data-wow-delay="0.2s"
                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="#">More Services</a>
                </div>
            </div>
        </div>

    </div>


@endsection
