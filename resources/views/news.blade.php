@extends("layouts.main")

@section("content")
<h1 class="mb-3">{{ $pageTitle }}</h1>

<p>Kategori : <a class="text-decoration-none" href="categories/{{ $news->category->slug }}">{{ $news->category->name }}</a> | Penulis :  <a class="text-decoration-none" href="authors/{{ $news->author->username }}">{{ $news->author->name }}</a></p>

<p >{{ $news->body }}</p>


@endsection
