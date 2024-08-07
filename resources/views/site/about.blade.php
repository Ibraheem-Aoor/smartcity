@extends('layouts.site.master')
@section('title', $about_section->title)
@section('content')
@section('page-header')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb"
        style="background-image: url(https://img.freepik.com/premium-photo/minimalist-pop-art-single-massive-japanese-skyscraper_579873-15193.jpg?ga=GA1.1.1266518853.1715856292&semt=ais_hybrid);">
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
<div class="container-fluid guide py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Expert Team</h5>
            <h1 class="mb-0">Meet Our Experts</h1>
        </div>
        <div class="row g-4">
            @foreach ($team as $member)
                <div class="col-md-6 col-lg-3">
                    <div class="guide-item">
                        <div class="guide-img">
                            <div class="guide-img-efects">
                                <img src="{{ getImageUrl($member->image) }}" class="img-fluid w-100 rounded-top" alt="{{ $member->name }}">
                            </div>
                            <div class="guide-icon rounded-pill p-2">
                                @isset($member->facebook)
                                    <a class="btn btn-square btn-primary rounded-circle mx-1"
                                        href="{{ $member->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                @endisset
                                @isset($member->twitter)
                                    <a class="btn btn-square btn-primary rounded-circle mx-1"
                                        href="{{ $member->twitter }}"><i class="fab fa-twitter"></i></a>
                                @endisset
                                @isset($member->instagram)
                                    <a class="btn btn-square btn-primary rounded-circle mx-1"
                                        href="{{ $member->instagram }}"><i class="fab fa-instagram"></i></a>
                                @endisset
                                @isset($member->linkedin)
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href="{{ $member->linkedin }}"><i
                                            class="fab fa-linkedin-in"></i></a>
                                @endisset
                            </div>
                        </div>
                        <div class="guide-title text-center rounded-bottom p-4">
                            <div class="guide-title-inner">
                                <h4 class="mt-3">{{ $member->name }}</h4>
                                <p class="mb-0">{{ $member->designation }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Team End -->
@endsection
