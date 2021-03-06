@extends('dashboard.layouts.main')


@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Berita</h1>
    </div>
    <div class="col-md-7 mb-5">
        <form action="/dashboard/news/{{ $news->slug }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="News Title" name="title" required autofocus value="{{ old('title', $news->title)}}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="slug" name="slug" required value="{{ old('slug') ? old('slug') : $news->slug }}">
                @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                    @if (old('category_id'))
                        @if (old('category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @elseif ($news->category->id == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="newsImage" class="form-label">Pilih Gambar</label>
                <input type="hidden" value="{{ $news->image }}" name="oldImage" >
                <div class="row justify-content-center my-0">
                    @if ($news->image)
                        <img src="{{ asset('storage/'.$news->image) }}" class="img-preview img-fluid col-sm-5 my-3">
                    @else
                        <img class="img-preview img-fluid col-sm-5">
                    @endif
                </div>

                <input class="form-control @error('newsImage') is-invalid @enderror" type="file" id="newsImage" name="newsImage" onchange="previewImage()">
                @error('newsImage')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input id="body" type="hidden" name="body" class="@error('body') is-invalid @enderror" required value="{{ old('body', $news->body )}}">
                <trix-editor input="body"></trix-editor>
                @error('body')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>

  </main>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function () {
        fetch("/dashboard/news/checkSlug?title=" + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.querySelector(".trix-button-group--file-tools").remove();
    // prevents attachments:
    document.addEventListener("trix-file-accept", function(event) {
        event.preventDefault();
    });

    function previewImage() {
        const image = document.querySelector('#newsImage');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        if (!imgPreview.classList.contains('my-3')) {
            imgPreview.className += ' my-3';
        }

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    };
  </script>
@endsection
