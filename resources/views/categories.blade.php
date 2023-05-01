@extends('templates.header')

@section('body')

<div class="container pt-5">
    <h1 class="mb-5">Categories</h1>
    <div class="row">
        @foreach ($categories as $c)
            <div class="col-md-4 mb-4 mb-md-0">
                <a href="/?category={{ $c->slug }}">
                    <div class="card card-categories text-bg-dark">
                        <img src="https://source.unsplash.com/500x400?{{ $c->name }}" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title flex-fill p-3 text-center" style="background-color: rgba(0,0,0,0.7)">{{ $c->name }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection

@extends('templates.footer')