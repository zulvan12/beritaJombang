@extends("layouts.main")

@section("content")
<h1 class="mb-3">{{ $pageTitle }}</h1>

<div class="row justify-content-end mb-3">
    <div class="col-md-4">
        <form action="/">
            @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @elseif (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($news->count())

<div class="card mb-3">
    @if ($news[0]->image)
        <div style="max-height: 200px; overflow:hidden;">
            <img src="{{ asset('storage/'.$news[0]->image) }}" alt="{{ $news[0]->category->name }}" class="card-img-top">
        </div>
    @else
        <img src="https://source.unsplash.com/1200x200?{{ $news[0]->category->en_name }}" alt="{{ $news[0]->category->name }}" class="card-img-top">
    @endif

    <div class="card-body text-center">
      <h3 class="card-title"><a href="/{{ $news[0]->slug }}" class="text-decoration-none">{{ $news[0]->title }}</a></h3>

      <p class="text-muted">Category : <a class="text-decoration-none" href="/?category={{ $news[0]->category->slug }}">{{ $news[0]->category->name }}</a> | Author : <a class="text-decoration-none" href="/?author={{ $news[0]->author->username }}">{{ $news[0]->author->name }}</a></p>
      <p class="card-text mb-0">{{ $news[0]->excerpt }}</p>

      <p class="card-text mb-0"><small class="text-muted">{{ $news[0]->created_at->diffForHumans() }}</small></p>

      <a href="/{{ $news[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
    </div>
</div>

<div class="row">
    @foreach ($news->skip(1) as $singleNews)
        <div class="col-md-4 mb-2">
            <div class="card">
                <div class="position-absolute px-3 py-1 bg-dark">
                    <a class="text-decoration-none text-white" href="/?category={{ $singleNews->category->slug }}">{{ $singleNews->category->name }}</a>
                </div>

                @if ($singleNews->image)
                    <div style="max-height: 300px; overflow:hidden;">
                        <img src="{{ asset('storage/'.$singleNews->image) }}" alt="{{ $singleNews->category->name }}" class="card-img-top">
                    </div>
                @else
                    <img src="https://source.unsplash.com/300x200?{{ $singleNews->category->en_name }}" class="card-img-top" alt="{{ $singleNews->category->en_name }}">
                @endif

                <div class="card-body">
                <h5 class="card-title"><a href="/{{ $singleNews->slug }}" class="text-decoration-none">{{ $singleNews->title }}</a></h5>
                <small>
                    <p class="text-muted mb-2">Author : <a class="text-decoration-none" href="/?author={{ $singleNews->author->username }}">{{ $singleNews->author->name }}</a> | {{ $singleNews->created_at->diffForHumans() }}</p>
                </small>
                <p class="card-text">{{ $singleNews->excerpt }}</p>
                <a href="/{{ $singleNews->slug }}" class="text-decoration-none btn btn-primary">Read More...</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="justify-content-center d-flex my-4">
    {{ $news->links() }}
</div>

@else
    <p class="text-center fs-4">No Post Found</p>
@endif

@endsection
