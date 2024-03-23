@extends('dashboard.layouts.main')

@section('container-content')
    <div class="container">
        <h1></h1>
        <div class="row mb-5">
            <div class="col-lg-8">
                <h2 class="mb-5">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-primary"><i class="bi bi-arrow-left"></i>Back to Posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit this Post</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline ">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('are you sure?')" ><i class="bi bi-trash"></i></button>
                  </form>
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="card-img-top mt-4" alt="...">
                <article>
                    <p>{!! $post->body !!}</p>
                </article>
                <a href="/dashboard/posts" class="text-decoration-none">Back to Post</a>
            </div>
        </div>
    </div>
@endsection