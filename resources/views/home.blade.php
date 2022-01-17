@extends("layouts.main")

@section("content")
<h1 class="mb-5">{{ $pageTitle }}</h1>

@foreach ($news as $singleNews)
    <article class="mb-2 border-bottom pb-4">
        <h2><a href="/{{ $singleNews->slug }}" class="text-decoration-none">{{ $singleNews->title }}</a></h2>

        <p>Category : <a class="text-decoration-none" href="/categories/{{ $singleNews->category->slug }}">{{ $singleNews->category->name }}</a> | Author : <a class="text-decoration-none" href="/authors/{{ $singleNews->author->username }}">{{ $singleNews->author->name }}</a></p>

        <p>{{ $singleNews->excerpt }}</p>

        <a href="/{{ $singleNews->slug }}" class="text-decoration-none">Read More...</a>
    </article>
@endforeach
@endsection
