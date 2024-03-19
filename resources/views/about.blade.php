@extends('layouts/main')

@section('main-container')
    <section>
        <h1 class="mb-3">Ini Halaman About</h1>
        <img src="img/{{ $image }}" alt="" class="w-25 rounded-circle mb-3">
        <p>{{ $nama }}</p>
        <p>{{ $email }}</p>
    </section>
@endsection