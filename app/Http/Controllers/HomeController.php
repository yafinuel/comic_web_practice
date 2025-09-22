<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = $request->author;

        $query = Comic::select('title', 'id', 'author', 'published_at');
        
        if($filter){
            $query->where('author', $filter);
        }

        $comics = $query->get();
        
        $authors = Comic::select('author')->distinct()->pluck('author');
        $newestComics = Comic::select('title', 'id')->latest('published_at')->take(5)->get();
        $latest = Comic::select('title', 'id')->latest('published_at')->first();
        $oldest = Comic::select('title', 'id')->oldest('published_at')->first();

        return view('home.home', [
            'comics' => $comics, 
            'newestComics' => $newestComics, 
            'authors' => $authors,
            'latest' => $latest,
            'oldest' => $oldest,
        ]);
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
    public function show(string $id)
    {
        //
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
