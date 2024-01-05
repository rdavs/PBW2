<!-- resources/views/beranda2.blade.php -->

@extends('layouts.main')

@section('container')
<div class="bg">
    {{-- Recommended Products --}}
    <div class="produk p-5 mx-5">
        <div class="text mb-2">Recommended</div>
        <!-- Display Recommended Products from $posts -->
        <div class="atas d-flex justify-content-center gap-4">
            @foreach ($posts as $post)
            <div class="kiri">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}">
            </div>
            @endforeach
        </div>
    </div>

    {{-- New Products --}}
    <div class="newp p-5 mx-5">
        <div class="text mb-2">New Product</div>
        <!-- Display New Products from $posts -->
        <div class="row row-cols-1 row-cols-md-6 g-4 text-center">
            @foreach ($posts as $post)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->name }}">
                    <div class="card-body">
                        <h6 class="card-title">{{ $post->name }}</h6>
                        <p class="card-text">{{ $post->kondisi }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">RP {{ number_format($post->harga) }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection