<!-- resources/views/posts/search.blade.php -->

@extends('layouts.main')

@section('container')

<div class="container px-5 mx-5 mt-4">
    <h2>Search Results</h2>

    <!-- Display search results -->
    <div class="row row-cols-1 row-cols-md-5 g-4 text-center">
        @forelse ($posts as $post)
        <div class="col">
            <div class="card h-100">
                <a href="{{ route('posts.detail', ['id' => $post->id]) }}" class="text-decoration-none">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->name }}">
                    <div class="card-body">
                        <h6 class="card-title">{{ $post->name }}</h6>
                        <p class="card-text">{{ $post->kondisi }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">RP {{ $post->harga }}</small>
                    </div>
                </a>
            </div>
        </div>
        @empty
        <p>No results found.</p>
        @endforelse
    </div>
</div>

@endsection