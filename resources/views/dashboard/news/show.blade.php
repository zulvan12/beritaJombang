@extends('dashboard.layouts.main')


@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="container" id="top">
        <div class="row my-4">
            <div class="col-lg-10">
                <h1 class="my-2">{{ $news->title }}</h1>

                <img src="https://source.unsplash.com/1000x300?{{ $news->category->en_name }}" alt="{{ $news->category->name }}" class="img-fluid mb-3">

                <a href="/dashboard/news" class="btn btn-outline-primary"><span data-feather="arrow-left"></span> Back to My News</a>
                <a href="#" class="btn btn-outline-success"><span data-feather="edit"></span> Edit</a>
                <a href="#" class="btn btn-outline-danger"><span data-feather="x-circle"></span> Delete</a>

                <p >{!! $news->body !!}</p>

                <a href="#top" class="text-decoration-none btn btn-primary">Back to Top</a>
            </div>
        </div>
    </div>
  </main>


@endsection
