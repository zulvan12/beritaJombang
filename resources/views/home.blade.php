@extends("layouts.main")

@section("content")
<h1 class="mb-5">{{ $pageTitle }}</h1>

@foreach ($news as $singleNews)
    <article class="mb-2 border-bottom pb-4">
        <h2><a href="#" class="text-decoration-none">{{ $singleNews->title }}</a></h2>
        <p>Category : {{ $singleNews->category->name }} | Author : {{ $singleNews->author->name }}</p>
        <p>{{ $singleNews->excerpt }}</p>
        <a href="#" class="text-decoration-none">Read More...</a>
    </article>
@endforeach
@endsection
