<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();

        return view('dynamic.dynamic_gallery_lists', compact('galleries'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Find the gallery by ID
        $gallery = Gallery::findOrFail($id);

        // Retrieve gallery images associated with the gallery
        $images = GalleryImage::where('gallery_id', $id)->get();

        // Extract and decode the image paths from the images
        $imagePathsJson = $images->pluck('image_path')->first(); // Get the JSON string
        $imagePaths = json_decode($imagePathsJson, true); // Decode the JSON string

        // Pass the gallery and image paths to the view
        return view('dynamic.dynamic_gallery_show', compact('gallery', 'imagePaths'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
