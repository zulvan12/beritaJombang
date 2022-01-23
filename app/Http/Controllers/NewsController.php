<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use App\Models\Author;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titleDescription = '';
        if (request('category') && request('author')) {
            $author = Author::firstWhere('username', request('author'));
            $category = Category::firstWhere('slug', request('category'));
            $titleDescription = ' di Kategori ' . $category->name . ' ditulis oleh ' . $author->name;
        }
        else if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $titleDescription = ' di Kategori ' . $category->name;

        } elseif (request('author')) {
            $author = Author::firstWhere('username', request('author'));
            $titleDescription = ' ditulis oleh ' . $author->name;
        }

        return view('home', [
            "pageTitle" => "Berita Jombang" . $titleDescription,
            "news" => News::latest()->filter(request(['search','category','author']))->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news', [
            "pageTitle" => $news->title,
            "news" => $news,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
}
