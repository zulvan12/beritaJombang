@extends("layouts.main")

@section("content")
<h1 class="mb-3">{{ $pageTitle }} : </h1>

<div class="row mb-3">
    @foreach ($listCategories as $category)
        <div class="col-md-4 mb-4">
            <a href="/?category={{ $category->slug }}" class="text-decoration-none">
            <div class="card">
                <div class="card-img-overlay d-flex align-items-center p-0 text-white"><h5 class="card-title text-center flex-fill py-2" style="background-color : rgba(0,0,0,0.5)">{{ $category->name }}</h5>
                </div>

                <img src="https://source.unsplash.com/300x200?{{ $category->en_name }}" class="card-img-top" alt="{{ $category->name }}">
            </div>
            </a>
        </div>
    @endforeach
</div>


@endsection
