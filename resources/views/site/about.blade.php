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
@include('site.partials.team')
<!-- Team End -->
@endsection
