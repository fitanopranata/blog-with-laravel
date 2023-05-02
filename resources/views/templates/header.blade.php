<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <style>
      .card-categories {
        overflow: hidden;
      }
      .card-categories img {
        max-width: 100%;
        transition: all 0.3s;
        display: block;
        width: 100%;
        height: auto;
        transform: scale(1);
      }
      .card-categories:hover img {
        transform: scale(1.5) !important;
      }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg py-3" style="background-color: #fff; box-shadow: 1px 1px 1px 1px rgb(0 0 0 / 20%);">
        <div class="container">
          <a class="navbar-brand" href="/">My Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-5 me-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/categories">Categories</a>
              </li>
            </ul>
            <ul class="navbar-nav me-1">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </li>
              </ul>
            </li>
            @else
              <a href="/login" class="btn btn-danger me-1">Login</a>
            @endauth
          </div>
        </div>
      </nav>

      <div class="wrapper">

    @yield('body')