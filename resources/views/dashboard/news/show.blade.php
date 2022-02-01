@extends('dashboard.layouts.main')


@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container" id="top">
        <div class="row my-4">
            <div class="col-lg-10">
                <h1 class="mt-2 mb-0">{{ $news->title }}</h1>
                <p class="mb-2">Kategori : {{ $news->category->name }}</p>
                @if ($news->image)
                    <div style="width: 1000px; overflow:hidden;">
                        <img src="{{ asset('storage/'.$news->image) }}" alt="{{ $news->category->name }}" class="img-fluid mb-2">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1000x300?{{ $news->category->en_name }}" alt="{{ $news->category->name }}" class="img-fluid mb-2">
                @endif

                <a href="/dashboard/news" class="btn btn-outline-primary"><span data-feather="arrow-left"></span> Back to My News</a>
                <a href="/dashboard/news/{{ $news->slug }}/edit" class="btn btn-outline-success"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/news/{{ $news->slug }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-outline-danger" onclick='return confirm(`Delete "{{ $news->title }}" ?`)'><span data-feather="x-circle"></span> Delete</button>
                </form>

                <p >{!! $news->body !!}</p>

                <a href="#top" class="text-decoration-none btn btn-primary">Back to Top</a>
            </div>
        </div>
    </div>
  </main>


@endsection
