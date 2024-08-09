@extends('layouts.main')

@section('content')
    <section class="banner-common-section">
        <div class="name-middle">
            <div class="home-link"><a href="/home"><span>Home</span></a></div>

            <div class="angle-banner"><i class="fa-solid fa-angle-right" aria-hidden="true"></i></div>

            <div class="navbar-name">
                <h3>Gallery</h3>
            </div>
        </div>
    </section>

    <section class="section-wrapper">
        <div class="container">
            <div class="gallery-design">
                @foreach ($images as $image)
                    <div class="magnific-img">
                        <a class="magnific-img-item" href="{{ asset($image->image_path) }}">
                            <img src="{{ asset($image->image_path) }}" />
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="gBack-buttonWrapper">
                <div class="gBack-button"><a href="#">Back To Album</a></div>
            </div>
        </div>
    </section>
@endsection
{{--

        Controller Variable:
        $images: Holds the collection of gallery images fetched from the database.

    Blade Template Variables:
        $image->image_path: Represents the path of each image in the gallery.

Additional Variables (used in routes, models, migrations, etc.):

    Route Variables:
        /gallery: The route URL to access the gallery page.

    Model Variables:
        Gallery: The Eloquent model representing the gallery table in the database.

    Migration Variables:
        image_path: Column in the gallery table where the image path is stored.

    Seeder Variables:
        ['image_path' => 'img/gitem-1.jpg']: Example data for seeding the gallery table
--}}
