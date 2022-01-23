@extends("layouts.main")

@section("content")

<div class="row justify-content-center mb-5">
    <div class="col-md-10">
        <h1 class="mb-2">{{ $pageTitle }}</h1>

        <img src="https://source.unsplash.com/1000x300?{{ $news->category->en_name }}" alt="{{ $news->category->name }}" class="img-fluid">

        <p class="text-center text-muted mb-4">Kategori : <a class="text-decoration-none" href="/?category={{ $news->category->slug }}">{{ $news->category->name }}</a> | Penulis :  <a class="text-decoration-none" href="/?author={{ $news->author->username }}">{{ $news->author->name }}</a> | {{ $news->created_at->diffForHumans() }}</p>

        <p >{!! $news->body !!}</p>

        <a href="/" class="text-decoration-none btn btn-primary">Back to Home</a>
    </div>
</div>

@endsection
