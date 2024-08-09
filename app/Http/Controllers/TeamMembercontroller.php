<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;

class TeamMembercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all team members with their social media links
        $teamMembers = TeamMember::with('socialMedia')->get();

        // Pass the data to the view
        return view('', compact('teamMembers'));
    }

    // Other methods remain unchanged
}
