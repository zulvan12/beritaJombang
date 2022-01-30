@extends('dashboard.layouts.main')


@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">My Post</h1>
    </div>
    <div>
        <a href="/dashboard/news/create"><div class="btn btn-primary mb-2">Buat Berita</div></a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Updated_at</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($news as $singleNews)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $singleNews->title }}</td>
                <td>{{ $singleNews->category->name }}</td>
                <td>{{ $singleNews->updated_at->diffForHumans() }}</td>
                <td>
                    <a href="/dashboard/news/{{ $singleNews->slug }}" class="btn btn-outline-success btn-sm"><span data-feather="eye"></span></a>
                    <a href="#" class="btn btn-outline-primary btn-sm"><span data-feather="edit"></span></a>
                    <a href="#" class="btn btn-outline-danger btn-sm"><span data-feather="x-circle"></span></a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
  </main>

@endsection
