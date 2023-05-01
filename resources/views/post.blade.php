@extends('templates.header')

@section('body')

<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-10">
            <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            <h1 class="mt-3">{{ $post->title }}</h1>
            <h6 class="mb-5 mt-3">By <a class="text-decoration-none" href="/?author={{ $post->author->username }}">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
            {!! $post->body !!}
        </div>
    </div>
</div>

@endsection

@extends('templates.footer')