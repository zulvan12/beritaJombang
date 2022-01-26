@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-4 mt-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center">Please register</h1>
          <form>
            <div class="form-floating">
              <input type="text" class="form-control rounded-top" name="name" id="name" placeholder="Full Name">
              <label for="name">Name</label>
            </div>
            <div class="form-floating">
              <input type="text" class="form-control" name="username" id="username" placeholder="Username">
              <label for="username">Username</label>
            </div>
            <div class="form-floating">
              <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
              <label for="email">Email address</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control rounded-bottom" id="password" name="password" placeholder="Password">
              <label for="password">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Register</button>
          </form>
          <small class="d-block text-end mt-2">Already Registered?<a href="/login" class="text-decoration-none"> Please Login</a></small>
        </main>
    </div>
</div>

@endsection
