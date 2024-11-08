<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Author;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('author')->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Get all authors
        $authors = Author::all();

        return view('articles.add', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author_id' => 'required'
        ],
        [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'author_id.required' => 'Author is required'
        ]
        );

        // Create a new article
        Article::create($validatedData);
        return redirect()->route('articles.index')->with('success', 'Article created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {   
        // find article by id
        $article = Article::with('author')->findOrFail($id);
        
        // pass the article to the view
        return view('articles.detail', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {   
        // Fetch article by id
        $article = Article::findOrFail($id);

        // Get all authors
        $authors = Author::all();

        // Return the edit view
        return view('articles.edit', compact('article', 'authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        // validasi data
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author_id' => 'required'
        ],
        [
            'title.required' => 'Title is required',
            'description.required' => 'Description is required',
            'author_id.required' => 'Author is required'
        ]
        );

        // Fetch the article and update
        $article = Article::findOrFail($id);
        $article->update($validatedData);

        // Redirect to the articles index with a success message
        return redirect()->route('articles.index')->with('success', 'Article updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        // Find the article by id
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully!');
    }
}
