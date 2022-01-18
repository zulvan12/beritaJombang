@extends("layouts.main")

@section("content")
<h1 class="mb-3">{{ $pageTitle }}</h1>

@if ($news->count())

<div class="card mb-3">
    <img src="https://source.unsplash.com/1200x200?{{ $news[0]->category->en_name }}" class="card-img-top" alt="{{ $news[0]->category->name }}">
    <div class="card-body text-center">
      <h3 class="card-title">{{ $news[0]->title }}</h3>

      <p>Category : <a class="text-decoration-none" href="/categories/{{ $news[0]->category->slug }}">{{ $news[0]->category->name }}</a> | Author : <a class="text-decoration-none" href="/authors/{{ $news[0]->author->username }}">{{ $news[0]->author->name }}</a></p>
      <p class="card-text">{{ $news[0]->excerpt }}</p>

      <p class="card-text"><small class="text-muted">{{ $news[0]->created_at->diffForHumans() }}</small></p>

      <a href="/{{ $news[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
    </div>
</div>

@else
    <p class="text-center fs-4">No Post Found</p>
@endif

@foreach ($news as $singleNews)
    <article class="mb-2 border-bottom pb-4">
        <h2><a href="/{{ $singleNews->slug }}" class="text-decoration-none">{{ $singleNews->title }}</a></h2>

        <p>Category : <a class="text-decoration-none" href="/categories/{{ $singleNews->category->slug }}">{{ $singleNews->category->name }}</a> | Author : <a class="text-decoration-none" href="/authors/{{ $singleNews->author->username }}">{{ $singleNews->author->name }}</a> | {{ $singleNews->created_at->diffForHumans() }}</p>

        <p>{{ $singleNews->excerpt }}</p>

        <a href="/{{ $singleNews->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
    </article>
@endforeach
@endsection
