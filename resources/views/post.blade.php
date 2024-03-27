@extends('layouts.main')

@section('main-container')
    <div class="container">
        <h1></h1>
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h2>{{ $post->title }}</h2>
                <p>By : <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                @if ($post->image)
                    <div class="div" style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-4" alt="...">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top mt-4" alt="...">
                @endif
                <article>
                    <p>{!! $post->body !!}</p>
                </article>
                <a href="/blog" class="text-decoration-none">Back to Post</a>
            </div>
        </div>
    </div>
@endsection