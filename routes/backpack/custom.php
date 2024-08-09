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
    Route::crud('user', 'UserCrudController');
    Route::crud('team-member', 'TeamMemberCrudController');
    Route::crud('brand', 'BrandCrudController');
    Route::crud('brand-image', 'BrandImageCrudController');
}); // this should be the absolute last line of this file

/**
 * DO NOT ADD ANYTHING HERE.
 */
