@extends('layouts.main')

@section('main-container')

<div class="row mt-4">
  <div class="col-md-8 m-auto">
    <main class="form-signin w-100">
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ session('success') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if (session()->has('loginFailed'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p>{{ session('loginFailed') }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <form action="/login" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Login Here</h1>
    
        <div class="form-floating">
          <input type="email" class="form-control rounded-top @error ('email') is-invalid @enderror"  name="email" id="email" placeholder="Email" value="{{ old('email') }}" autofocus required>
          <label for="email">Email address</label>
          @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom" name="password" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        
      </form>
      <small class="d-block text-center mt-3">Not Registered? <a href="/register" class="text-decoration-none">Register Now?</a></small>
    </main>
  </div>
</div>
    
@endsection