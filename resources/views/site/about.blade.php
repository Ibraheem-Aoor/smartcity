@extends('layouts.site.master')
@section('title', $about_section->title)
@push('css')
    <style>
        .experience {
            position: relative;
            padding: 45px 0 15px
        }

        .experience .timeline {
            position: relative;
            width: 100%
        }

        .experience .timeline::after {
            content: '';
            position: absolute;
            width: 2px;
            background: #13357b;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px
        }

        .experience .timeline .timeline-item {
            position: relative;
            background: inherit;
            width: 50%;
            margin-bottom: 30px
        }

        .experience .timeline .timeline-item.left {
            left: 0;
            padding-right: 30px
        }

        .experience .timeline .timeline-item.right {
            left: 50%;
            padding-left: 30px
        }

        .experience .timeline .timeline-item::after {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            top: 48px;
            right: -8px;
            background: #fff;
            border: #13357b !important;
            border-radius: 16px;
            z-index: 1
        }

        .experience .timeline .timeline-item.right::after {
            left: -8px
        }

        .experience .timeline .timeline-item::before {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            top: 46px;
            right: 10px;
            z-index: 1;
            border: 10px solid;
            border-color: transparent transparent transparent #ddd
        }

        .experience .timeline .timeline-item.right::before {
            left: 10px;
            border-color: transparent #ddd transparent transparent
        }

        .experience .timeline .timeline-date {
            position: absolute;
            width: 100%;
            top: 44px;
            font-size: 16px;
            font-weight: 600;
            color: #13357b;
            text-transform: uppercase;
            letter-spacing: 1px;
            z-index: 1
        }

        .experience .timeline .timeline-item.left .timeline-date {
            text-align: left;
            left: calc(100% + 55px)
        }

        .experience .timeline .timeline-item.right .timeline-date {
            text-align: right;
            right: calc(100% + 55px)
        }

        .experience .timeline .timeline-text {
            padding: 30px;
            background: #fff;
            position: relative;
            border-right: 5px solid #ddd;
            box-shadow: 0 0 60px rgba(0, 0, 0, .08)
        }

        .experience .timeline .timeline-item.right .timeline-text {
            border-right: none;
            border-left: 5px solid #ddd
        }

        .experience .timeline .timeline-text h2 {
            margin: 0 0 5px;
            font-size: 22px;
            font-weight: 600
        }

        .experience .timeline .timeline-text h4 {
            margin: 0 0 10px;
            font-size: 16px;
            font-style: italic;
            font-weight: 400
        }

        .experience .timeline .timeline-text p {
            margin: 0;
            font-size: 16px
        }

        @media(max-width: 767.98px) {
            .experience .timeline::after {
                left: 8px
            }

            .experience .timeline .timeline-item {
                width: 100%;
                padding-left: 38px
            }

            .experience .timeline .timeline-item.left {
                padding-right: 0
            }

            .experience .timeline .timeline-item.right {
                left: 0%;
                padding-left: 38px
            }

            .experience .timeline .timeline-item.left::after,
            .experience .timeline .timeline-item.right::after {
                left: 0
            }

            .experience .timeline .timeline-item.left::before,
            .experience .timeline .timeline-item.right::before {
                left: 18px;
                border-color: transparent #ddd transparent transparent
            }

            .experience .timeline .timeline-item.left .timeline-date,
            .experience .timeline .timeline-item.right .timeline-date {
                position: relative;
                top: 0;
                right: auto;
                left: 0;
                text-align: left;
                margin-bottom: 10px
            }

            .experience .timeline .timeline-item.left .timeline-text,
            .experience .timeline .timeline-item.right .timeline-text {
                border-right: none;
                border-left: 5px solid #ddd
            }
        }
    </style>
@endpush
@section('content')
@section('page-header')
    @php
        $main_image = isset($about_section->intro_image)
            ? getImageUrl($about_section->intro_image)
            : asset(
                'https://img.freepik.com/free-photo/business-people-futuristic-business-environment_23-2150970218.jpg?t=st=1722886674~exp=1722890274~hmac=a804d3c39a6daf24955b7867c6630263a485e13c1e95930a80e38c17dcb9c93b&w=1060',
            );
    @endphp
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb" style="background-image: url({{ $main_image }});">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">{{ $about_section->title }}</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active text-white">{{ $about_section->title }}</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
@endsection
<!-- About Start -->
<div class="container-fluid about py-5">
    {!! $about_section->content !!}
</div>
<!-- About End -->

<!-- Team Start -->
@include('site.partials.team')
<!-- Team End -->
@endsection
