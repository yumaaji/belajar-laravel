@extends('layouts.main')

@section('main-container')

<div class="row mt-4">
  <div class="col-md-8 m-auto">
    <main class="form-signin w-100">

      <form action="/register" method="POST">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center">Register Here</h1>
    
        <div class="form-floating">
          <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" required value="{{ old('name') }}">
          <label for="name">Name</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="username" class="form-control  @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" required value="{{ old('username') }}">
          <label for="username">Username</label>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control rounded-bottom  @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Submit</button>     
      </form>
      
      <small class="d-block text-center mt-3">Already Have Account? <a href="/login" class="text-decoration-none">Login Now?</a></small>
    </main>
  </div>
</div>
    
@endsection