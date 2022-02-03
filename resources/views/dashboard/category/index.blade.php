@extends('dashboard.layouts.main')


@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Daftar Category Berita</h1>
    </div>
    <div class="row">
        <div class="col-md-2">
            <a href="/dashboard/categories/create"><div class="btn btn-primary mb-2">Buat Category Baru</div></a>
        </div>
        <div class="col-md-3">
            @if (session('successInputCategory'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span data-feather="check-circle"></span>  {{ session('successInputNews') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (session('deleteCategory'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <span data-feather="alert-triangle"></span>  {{ session('deleteNews') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
    </div>
    <div class="table-responsive">
        <div class="col-md-5">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Category</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($categories as $category)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="/dashboard/categories/{{ $category->slug }}" class="btn btn-outline-success btn-sm"><span data-feather="eye"></span></a>
                        <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-outline-primary btn-sm"><span data-feather="edit"></span></a>
                        <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger btn-sm" onclick='return confirm(`Delete "{{ $category->name }}" ?`)'><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
        </div>


      </div>
  </main>

@endsection
