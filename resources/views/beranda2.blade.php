@extends('layouts.main')

@section('container')

<div class="bg">

    {{-- //produk atas --}}
    <div class="produk p-5 mx-5">

        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/DASHBOARD.png') }}" class="d-block w-100" alt="slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/321aad0c-cce3-4a0b-99ad-297ca88f1b33.png') }}" class="d-block w-100 h-50" alt="slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/image-1946-1024x576.png') }}" class="d-block w-100 h-50" alt="slide 3">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/contoh-iklan-kosmetik.jpg') }}" class="d-block w-100 h-50" alt="slide 4">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/16-contoh-iklan-produk-kendaraan.jpg') }}" class="d-block w-100 h-50" alt="slide 5">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        {{-- //end --}}

        {{-- //new produk --}}
        <div class="newp p-5 mx-5">
            <div class="text mb-2">New Product</div>

            <div class="row row-cols-1 row-cols-md-6 g-4 text-center">
                @foreach ($posts->take(6) as $post)
                <div class="col">
                    <!-- Wrap the entire card in an anchor tag -->
                    <a href="{{ route('posts.detail', ['id' => $post->id]) }}" class="card h-100 text-decoration-none" style="color:black">
                        <div class="card">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->name }}">
                            <div class="card-body">
                                <h6 class="card-title">{{ $post->name }}</h6>
                                <p class="card-text">{{ $post->kondisi }}</p>
                            </div>
                            <div class="card-footer ">
                                <small class="text-muted">Rp {{ $post->harga }}</small>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
        {{-- //end --}}


        {{-- //footer --}}
        <div class="footer d-flex justify-content-center gap-4">
            <div class="foot">
                <a href="{{ route('category', ['category' => 'food']) }}">
                    <img src="img/Food.png" alt="">
                    <div class="text-center" style="font-size: 12px">Food</div>
                </a>
            </div>
            <div class="cosmetic">
                <a href="{{ route('category', ['category' => 'cosmetic']) }}">
                    <img src="img/Cosmetic.png" alt="">
                    <div class="text-center" style="font-size: 12px">Cosmetic</div>
                </a>
            </div>
            <div class="fashion">
                <a href="{{ route('category', ['category' => 'fashion']) }}">
                    <img src="img/fashion.png" alt="">
                    <div class="text-center" style="font-size: 12px">Fashion</div>
                </a>
            </div>
            <div class="ecommerce">
                <a href="{{ route('category', ['category' => 'e-commerce']) }}">
                    <img src="img/E-commerce.png" alt="">
                    <div class="text-center" style="font-size: 12px">E-Commerce</div>
                </a>
            </div>
            <div class="vehicle">
                <a href="{{ route('category', ['category' => 'vehicle']) }}">
                    <img src="img/Vehicle.png" alt="">
                    <div class="text-center" style="font-size: 12px">Vehicle</div>
                </a>
            </div>
            <div class="more">
                <a href="{{ route('category', ['category' => 'more']) }}">
                    <img src="img/More.png" alt="">
                    <div class="text-center" style="font-size: 12px">More</div>
                </a>
            </div>
        </div>



    </div>
    @endsection