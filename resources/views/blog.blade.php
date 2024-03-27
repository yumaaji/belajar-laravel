@extends('layouts/main')

@section('main-container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="container mb-4">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <form action="/blog" method="GET">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" value="{{ request('search') }}" placeholder="Search here..">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($posts->count())
    <div class="card mb-3">
        @if ($posts[0]->image)
            <div class="div" style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top mt-4" alt="...">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top mt-4" alt="...">
        @endif
        <div class="card-body text-center">
          <a href="/post/{{ $posts[0]->slug }}" class="text-dark text-decoration-none"><h3 class="card-title">{{ $posts[0]->title }}</h3></a>
          <small>By : <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a></small>
          <p>{!! $posts[0]->excerpt !!}</p>
          <p class="card-text"><small class="text-body-secondary">Last updated {{ $posts[0]->created_at->diffForHumans() }}</small></p>
          <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none">Read more..</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.6)">
                            <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->slug }}</a>
                        </div>
                        <article>
                            @if ($post->image)
                                <div class="div" style="max-height: 400px; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top mt-4" alt="...">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top mt-4" alt="...">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"><a href="/post/{{ $post->slug}}" class="text-decoration-none">{{ $post->title }}</a></h5>
                                <p>By : <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                                <p>{!! $post->excerpt !!}</p>
                                <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center">Posts Not Found..</p>    
    @endif

    <div class="container">
        <div class="row">
            {{ $posts->links() }}
        </div>
    </div>
@endsection


