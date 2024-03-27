@extends('dashboard.layouts.main')

@section('container-content')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>
</div>
@if (session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>    
@endif

<div class="table-responsive small col-lg-8">
  <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Add new Categories</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Categories Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)    
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>
          <td>
            <a href="/dashboard/categories/{{ $category->slug }}"><i class="bi bi-eye"></i></a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit"><i class="bi bi-pencil"></i></a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline ">
              @method('delete')
              @csrf
              <button class="border-0" onclick="return confirm('are you sure?')" ><i class="bi bi-trash"></i></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection