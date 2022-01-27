@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-4 mt-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
          <form>

            <div class="form-floating">
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="password" placeholder="Password">
              <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
          </form>
          <small class="d-block text-end mt-2">Not Registered?<a href="/register" class="text-decoration-none"> Register Now!</a></small>
        </main>
    </div>
</div>

@endsection
