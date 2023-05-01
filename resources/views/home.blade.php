@extends('templates.header')

@section('body')

<div class="container pt-5">
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-5">
        <div class="col-10 col-md-8 col-lg-6">
            <form action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group">
                  <input type="text" name="search" id="search" class="form-control" placeholder="Cari.." value="{{ request('search') }}">
                  <button class="btn btn-outline-danger" type="submit">Cari</button>
                </div>
            </form>
        </div>
    </div>

    @if (count($posts) > 0)
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card mb-5">
                    <img src="https://source.unsplash.com/1200x500?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                    <div class="card-body">
                    <h5 class="card-title"><a href="/{{ $posts[0]->slug }}" class="text-decoration-none">{{ $posts[0]->title }}</a></h5>
                    <p><small class="text-body-secondary">By <a class="text-decoration-none" href="/?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> in {{  $posts[0]->created_at->diffForHumans()}}</small></p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="position-absolute px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0.7); border-bottom-right-radius: 10px;">{{ $post->category->name }}</div>
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title" class="text-decoration-none"><a href="/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
                      <p><small class="text-body-secondary">By <a class="text-decoration-none" href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/?category={{ $post->category->slug }}">{{ $post->category->name }}</a> in {{  $post->created_at->diffForHumans()}}</small></p>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <a href="/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <img src="/img/no-data.png" />
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
                <a href="/categories" class="btn btn-primary mb-5">Back</a>
            </div>
        </div>
    @endif

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</div>

@endsection

@extends('templates.footer')