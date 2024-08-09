<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\TeamMember;

class AboutController extends Controller
{
    //
    public function index()
    {
        // Fetch the 'about' page
        $page = Page::where('title', 'about')->first();

        // If the page exists, fetch its sections sorted by 'order'
        $sections = $page ? $page->sections()->orderBy('order')->get() : [];

        // Fetch team members with social media links
        $teamMembers = TeamMember::with('socialMedia')->get();

        // Pass the data to the view
        return view('dynamic.dynamic_about', compact('sections', 'teamMembers'));
    }
}
