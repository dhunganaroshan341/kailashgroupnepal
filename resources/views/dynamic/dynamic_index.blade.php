{{-- @php
    dd($testimonials);
@endphp --}}

@extends('layouts.main')

@section('content')
    {{-- <section class="banner-section">
        <div class="banner-wrapper owl-carousel owl-theme" id="banner">
            @foreach ($banners as $banner)
                <div class="banner-item">
                    <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image">
                    <div class="overlay"></div>
                    <div class="banner-content">
                        <p>{{ $banner->text }}</p>
                        <h1>{{ $banner->heading }}</h1>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="section-wrapper">
        <div class="container">
            <div class="about-section">
                <div class="about-content">
                    <div class="head-tag">{{ $about->tagline }}</div>
                    <h1>About <span>{{ $about->title }}</span></h1>
                    <div class="about-des">
                        <p class="para-head">{{ $about->description }}</p>
                    </div>
                    <div class="more-button"><a href="{{ $about->more_link }}">About Us</a></div>
                </div>
                <div class="img-about">
                    <img class="img" src="{{ asset('storage/' . $about->image) }}" alt="About Image">
                </div>
            </div>
        </div>
    </section>
    <section class="section-wrapper brands-section">
        <div class="container">
            <div class="our-brands">
                <div class="top-sectiom-title">
                    <div class="top-title">
                        <h3>{{ $brands_title }}</h3>
                        <p>{{ $brands_description }}</p>
                    </div>
                </div>
                <div class="brands-wrapper">
                    <div class="brands-lists owl-carousel owl-theme" id="brands-kailash">
                        @foreach ($brands as $brand)
                            <div class="item">
                                <span class="number">{{ $brand->year }}</span>
                                <div class="icon">
                                    <img src="{{ asset('storage/' . $brand->logo) }}" alt="Brand Logo">
                                </div>
                                <div class="pt-amenities-title-class">
                                    <a href="{{ $brand->website }}">{{ $brand->name }}</a>
                                    <div class="section-text">
                                        <p>{{ $brand->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-wrapper">
        <div class="container">
            <div class="testimonial-wrapper">
                <div class="top-sectiom-title">
                    <div class="top-title">
                        <h3>{{ $testimonial_title }}</h3>
                    </div>
                </div>
                @foreach ($testimonials as $testimonial)
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <div class="testimonial-img-wrapper">
                                <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Testimonial Image">
                            </div>
                        </div>
                        <div class="message-wrapper">
                            <div class="testimonial-para">
                                {{ $testimonial->message }}
                            </div>
                            <div class="testimonial-title">{{ $testimonial->name }}</div>
                            <div class="testimonial-post">{{ $testimonial->position }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <!-- resources/views/sections/index.blade.php -->

    {{-- <section class="section-wrapper">
        <div class="container">
            @if ($testimonials)
                <div class="testimonial-wrapper">
                    <div class="top-sectiom-title">
                        <div class="top-title">
                            <h3>{{ $testimonial_title }}</h3>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <div class="testimonial-img-wrapper">
                                @if ($testimonials->image_path)
                                    <img src="{{ asset('storage/' . $testimonials->image_path) }}" alt="Testimonial Image">
                                @else
                                    <img src="{{ asset('images/default-image.png') }}" alt="Default Image">
                                @endif
                            </div>
                        </div>
                        <div class="message-wrapper">
                            <div class="testimonial-para">
                                {{ $testimonials->content }}
                            </div>
                            <div class="testimonial-title ">{{ $testimonials->writer }}</div>
                            <div class="testimonial-post">{{ $testimonials->role }}</div>
                        </div>
                    </div>
                </div>
            @else
                <p>No testimonials available.</p>
            @endif
        </div>
    </section> --}}


    {{-- <section class="section-wrapper cta-section">
        <div class="container">
            <div class="cta-wrapper">
                <div class="title-cta">
                    <h3>{{ $cta_title }}</h3>
                </div>
                <div class="pgraph-cta">
                    <p>{{ $cta_description }}</p>
                </div>
                <div class="load-more cta-link-more">
                    <a href="{{ $cta_link }}">
                        Contact Here
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-wrapper commit-section">
        <div class="container">
            <div class="our-commitments">
                <div class="top-sectiom-title">
                    <div class="top-title">
                        <h3>{{ $commitments_title }}</h3>
                        <p>{{ $commitments_description }}</p>
                    </div>
                </div>
                <div class="commmitment-wrapper">
                    <div class="commitment-lists owl-carousel owl-theme" id="commit-kailash">
                        @foreach ($commitments as $commitment)
                            <div class="item">
                                <div class="content-image">
                                    <img src="{{ asset('storage/' . $commitment->image) }}" alt="Commitment Image">
                                </div>
                                <div class="commitment-content">
                                    <h3>{{ $commitment->title }}</h3>
                                    <p>{{ $commitment->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-wrapper honors-wrapper">
        <div class="container">
            <div class="honors-details">
                @foreach ($honors as $honor)
                    <div class="honors-list">
                        <h1>{{ $honor->count }}</h1>
                        <p>{{ $honor->label }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="post-section section-wrapper">
        <div class="container">
            <div class="top-sectiom-title">
                <div class="top-title">
                    <h3>{{ $news_title }}</h3>
                    <p>{{ $news_description }}</p>
                </div>
            </div>
            <div class="post-news-section">
                <div class="post-wrapper owl-carousel owl-theme" id="ta_post">
                    @foreach ($news as $item)
                        <div class="post-item">
                            <div class="post-img">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="News Image">
                            </div>
                            <div class="post-content">
                                <div class="post-date">{{ $item->date }}</div>
                                <div class="post-title">{{ $item->title }}</div>
                                <div class="post-des">{{ $item->description }}</div>
                                <div class="read-more-text"><a href="{{ $item->link }}">Read More</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="view-more load-more">
                    <a href="{{ $view_more_link }}">
                        View More
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="news-suscribe-section section-wrapper">
        <div class="container">
            <div class="news-suscribe-wrapper">
                <div class="suscribe-title">
                    <h4>{{ $subscribe_title }}</h4>
                </div>
                <div class="suscribe-pgraph">
                    <p>{{ $subscribe_description }}</p>
                </div>
                <div class="suscribe-form-wrap">
                    <div class="suscribe-grid-form">
                        <div class="control">
                            <input class="input" type="text" placeholder="Your email" name="email">
                        </div>
                        <div class="control-suscribe-btn load-more">
                            <a href="{{ $subscribe_link }}">Subscribe Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}




    <section class="banner-section">
        <div class="banner-wrapper owl-carousel owl-theme" id="banner">
            @foreach ($banners as $banner)
                <div class="banner-item">
                    <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image">
                    <div class="overlay"></div>
                    <div class="banner-content">
                        <p>{{ $banner->description }}</p>
                        <h1>{{ $banner->title }}</h1>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="section-wrapper">
        <div class="container">
            <div class="about-section">
                <div class="about-content">
                    <div class="head-tag">{{ $about->title }}</div>
                    <h1>About <span>{{ $about->sub_heading }}</span></h1>
                    <div class="about-des">
                        <p class="para-head">{{ $about->description }}</p>
                    </div>
                    <div class="more-button"><a href="{{ route('about') }}">About Us</a></div>
                </div>
                <div class="img-about">
                    <img class="img" src="{{ asset('storage/' . $about->image) }}" alt="About Image">
                </div>
            </div>
        </div>
    </section>

    <section class="section-wrapper brands-section">
        <div class="container">
            <div class="our-brands">
                <div class="top-sectiom-title">
                    <div class="top-title">
                        <h3>Our Brands</h3>
                        <p>Discover our trusted brands.</p>
                    </div>
                </div>
                <div class="brands-wrapper">
                    <div class="brands-lists owl-carousel owl-theme" id="brands-kailash">
                        @foreach ($brands as $brand)
                            <div class="item">
                                <span class="number">{{ $brand->date }}</span>
                                <div class="icon">
                                    <img src="{{ asset('storage/' . $brand->image) }}" alt="Brand Logo">
                                </div>
                                <div class="pt-amenities-title-class">
                                    <a href="{{ route('home') }}">{{ $brand->title }}</a>
                                    <div class="section-text">
                                        <p>{{ $brand->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-wrapper">
        <div class="container">
            @if ($testimonials->isNotEmpty())
                <div class="testimonial-wrapper">
                    <div class="top-sectiom-title">
                        <div class="top-title">
                            <h3>Testimonials</h3>
                        </div>
                    </div>
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <div class="testimonial-img-wrapper">
                                    <img src="{{ $testimonial->image_path ? asset('storage/' . $testimonial->image_path) : asset('images/default-image.png') }}"
                                        alt="Testimonial Image">
                                </div>
                            </div>
                            <div class="message-wrapper">
                                <div class="testimonial-para">
                                    {{ $testimonial->testimonial }}
                                </div>
                                <div class="testimonial-title">{{ $testimonial->name }}</div>
                                <div class="testimonial-post">{{ $testimonial->position }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No testimonials available.</p>
            @endif
        </div>
    </section>

    <section class="section-wrapper">
        <div class="container">
            @if ($commitments->isNotEmpty())
                <div class="commitment-wrapper">
                    <div class="top-sectiom-title">
                        <div class="top-title">
                            <h3>Our Commitments</h3>
                        </div>
                    </div>
                    @foreach ($commitments as $commitment)
                        <div class="commitment-item">
                            <div class="commitment-img">
                                <img src="{{ asset('storage/' . $commitment->image) }}" alt="Commitment Image">
                            </div>
                            <div class="commitment-content">
                                <h3>{{ $commitment->title }}</h3>
                                <p>{{ $commitment->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <section class="section-wrapper honors-wrapper">
        @if ($milestones->isNotEmpty())
            <div class="container">
                <div class="honors-details">
                    @foreach ($milestones as $milestone)
                        <div class="honors-list">
                            <h1>{{ $milestone->date }}+</h1>
                            <p>{{ $milestone->title }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p>No milestones available.</p>
        @endif
    </section>


    <section class="post-section section-wrapper">
        <div class="container">
            <div class="top-sectiom-title">
                <div class="top-title">
                    <h3>News & Notices</h3>
                    <p>Kailash Group Hardware and Supplies, your one-stop destination for premium quality tools, materials,
                        and equipment.</p>
                </div>
            </div>
            <div class="post-news-section">
                <div class="post-wrapper owl-carousel owl-theme" id="ta_post">
                    @foreach ($news as $item)
                        <div class="post-item">
                            <div class="post-img">
                                <img src="{{ asset('storage/' . $item->image) }}" alt="News Image">
                            </div>
                            <div class="post-content">
                                <div class="post-date">{{ $item->created_at->format('d M Y') }}</div>
                                <div class="post-title">{{ $item->title }}</div>
                                <div class="post-des">{{ $item->subheading }}</div>
                                <div class="read-more-text"><a href="/newsdetail/{{ $item->news_id }}">Read More</a></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="view-more load-more">
                    <a href="{{ route('newsnotice') }}">
                        View More
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="news-suscribe-section section-wrapper">
        <div class="container">
            <div class="news-suscribe-wrapper">
                <div class="suscribe-title">
                    <h4>Fill the form from Here</h4>
                </div>
                <div class="suscribe-pgraph">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut repellendus tempore deserunt
                        voluptatem quaerat illo.</p>
                </div>
                <div class="suscribe-form-wrap">
                    <div class="suscribe-grid-form">
                        <div class="control">
                            <!-- <label class="label">
                                                                        your email
                                                                        <span class="required">*</span>
                                                                    </label>-->
                            <input class="input" type="text" placeholder="Your email" id="" name="name">
                        </div>
                        <div class="control-suscribe-btn load-more">
                            <a href="#">Suscribe Here</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
