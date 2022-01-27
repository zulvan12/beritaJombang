@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-4 mt-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Please register</h1>
          <form action="/register" method="post">
            @csrf
            <div class="form-floating">
              <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="name" placeholder="Full Name" required value="{{ old('name') }}">
              <label for="name">Name</label>
              @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
              <label for="username">Username</label>
              @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" required value="{{ old('email') }}">
              <label for="email">Email address</label>
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-floating">
              <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
              <label for="password">Password</label>
              @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
          </form>
          <small class="d-block text-end mt-2">Already Registered?<a href="/login" class="text-decoration-none"> Please Login</a></small>
        </main>
    </div>
</div>

@endsection
