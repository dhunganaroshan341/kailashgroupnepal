<?php

namespace App\Http\Controllers;

use App\Models\Section;

class IndexController extends Controller
{
    public function index()
    {
        // Attempt to fetch the section with ID 1
        $testimonials = Section::find(1); // Using find() to return null if not found

        // Handle case where section might not be found
        if (! $testimonials) {
            // Optionally, you can set default values or handle the case as needed
            return redirect()->route('home')->with('error', 'Section not found.');
        }

        // Set the title from the retrieved section
        $testimonial_title = $testimonials->title;

        // Pass the data to the view
        return view('dynamic.dynamic_index', compact('testimonials', 'testimonial_title'));
    }

    // public function index()
    // {
    //     $banners = Banner::all();
    //     $about = About::first();
    //     $brands = Brand::all();
    //     $testimonials = Testimonial::all();
    //     $cta_title = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est incidunt delect';
    //     $cta_description = 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis officia qui...';
    //     $cta_link = '#';
    //     $commitments_title = 'Our Commitments';
    //     $commitments_description = 'Kailash Group Hardware and Supplies, your one-stop destination...';
    //     $commitments = Commitment::all();
    //     $honors = Honor::all();
    //     $news_title = 'Latest News';
    //     $news_description = 'Stay up-to-date with the latest news and updates.';
    //     $news = News::all();
    //     $view_more_link = '#';
    //     $subscribe_title = 'Subscribe to Our Newsletter';
    //     $subscribe_description = 'Stay updated with our latest news and offers.';
    //     $subscribe_link = '#';

    //     return view('home', compact('banners', 'about', 'brands', 'testimonials', 'cta_title', 'cta_description', 'cta_link', 'commitments_title', 'commitments_description', 'commitments', 'honors', 'news_title', 'news_description', 'news', 'view_more_link', 'subscribe_title', 'subscribe_description', 'subscribe_link'));
    // }
}
