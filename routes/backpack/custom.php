<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\CRUD.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('article', 'ArticleCrudController');
    Route::crud('gallery', 'GalleryCrudController');
    Route::crud('gallery-image', 'GalleryImageCrudController');
    Route::crud('media', 'MediaCrudController');
    Route::crud('page', 'PageCrudController');
    Route::crud('section', 'SectionCrudController');
    Route::crud('users', 'UserCrudController');
    Route::crud('team-member', 'TeamMemberCrudController');
    Route::crud('brand', 'BrandCrudController');
    Route::crud('brand-image', 'BrandImageCrudController');
    Route::crud('home', 'HomeCrudController');
    Route::crud('banner-slider', 'BannerSliderCrudController');
    Route::crud('banner-slider', 'BannerSliderCrudController');
    Route::crud('logo', 'LogoCrudController');
    Route::crud('about-section', 'AboutSectionCrudController');
    Route::crud('brand-journey', 'BrandJourneyCrudController');
    Route::crud('our-commitment', 'OurCommitmentCrudController');
    Route::crud('news-notice-section', 'NewsNoticeSectionCrudController');
    Route::crud('testimonial-section', 'TestimonialSectionCrudController');
    Route::crud('honor', 'HonorCrudController');
    Route::crud('image-folder', 'ImageFolderCrudController');
    Route::crud('image', 'ImageCrudController');
    Route::crud('contact-section-home', 'ContactSectionHomeCrudController');
    Route::crud('mile-stone', 'MileStoneCrudController');
    Route::crud('home-about', 'HomeAboutCrudController');
    Route::crud('contact', 'ContactCrudController');
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */
