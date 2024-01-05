@extends('layouts.main')

@section('container')

<div class="content d-flex">
    {{-- Kiri --}}
    <div class="col-xs-6 col-sm-3 mb-4 pb-4 sidebar-offcanvas" id="sidebar">
        <div class="list-group">
            <a href="#" class="list-group-item active">Categories</a>
            <a href="{{ route('category', ['category' => 'food']) }}" class="list-group-item">
                <img src="img/Food.png" alt=""> Food
            </a>
            <a href="{{ route('category', ['category' => 'cosmetic']) }}" class="list-group-item">
                <img src="img/Cosmetic.png" alt=""> Cosmetic
            </a>
            <a href="{{ route('category', ['category' => 'vehicle']) }}" class="list-group-item">
                <img src="img/Vehicle.png" alt=""> Vehicle
            </a>
            <a href="{{ route('category', ['category' => 'fashion']) }}" class="list-group-item">
                <img src="img/fashion.png" alt=""> Fashion
            </a>
        </div>
    </div><!--/.sidebar-offcanvas-->


    {{-- Kanan --}}
    <div class="kanan" style="width: 70%">
        <div class="row row-cols-1 row-cols-md-5 g-4 text-center">
            @foreach ($posts as $post)
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
            @endforeach
        </div>
    </div>
</div>
@endsection