<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $news = Article::all();

        return view('dynamic.dynamic_news_notice', compact('news'));
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
    public function show($slug)
    {
        // Retrieve the current article by slug
        $newsItem = Article::where('slug', $slug)->firstOrFail();

        // Retrieve other articles, excluding the current one
        $otherPosts = Article::where('slug', '!=', $slug)
            ->orderBy('created_at', 'desc')
            ->limit(5) // Adjust the number of related posts as needed
            ->get();

        // Pass data to the view
        return view('dynamic.dynamic_news_detail', compact('newsItem', 'otherPosts'));
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
