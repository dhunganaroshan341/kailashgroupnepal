@extends('layouts.main')
@section('content')
    <section class="banner-common-section">
        <div class="name-middle">
            <div class="home-link"><a href="/home"><span>Home</span></a></div>

            <div class="angle-banner"><i class="fa-solid fa-angle-right" aria-hidden="true"></i></div>

            <div class="navbar-name">
                <h3>{{ $gallery->title }}</h3>
            </div>
        </div>
    </section>

    <section class="section-wrapper">
        <div class="container">
            <div class="gallery-detail">
                <img src="{{ asset($gallery->image_path) }}" alt="{{ $gallery->title }}">
            </div>
            <div class="gBack-buttonWrapper">
                <div class="gBack-button"><a href="/gallery-list">Back To Gallery List</a></div>
            </div>
        </div>
    </section>
@endsection
{{--

    Summary of Variables

    $galleries (Gallery List Page):
        $gallery->id: {{ $gallery->id }}
        $gallery->title: {{ $gallery->title }}
        $gallery->image_path: {{ asset($gallery->image_path) }}

    $gallery (Gallery Detail Page):
        $gallery->id: {{ $gallery->id }}
        $gallery->title: {{ $gallery->title }}
        $gallery->image_path: {{ asset($gallery->image_path) }}
--}}
