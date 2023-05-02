@extends('templates.header')

@section('body')

<div class="row justify-content-center me-0 ms-0">
  <div class="col-md-4">

    @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main class="form-signin w-100 m-auto">
      <h1 class="h3 mt-5 mb-3 fw-normal text-center">Please login</h1>
      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        <p class="mt-3 text-body-secondary">&copy; <?= date('Y'); ?></p>
      </form>
  </main>
  </div>
</div>

@endsection

@extends('templates.footer')