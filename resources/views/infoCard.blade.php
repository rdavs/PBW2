@extends('layouts.main')

@section('container')

<!-- kiri -->
<div class="content d-flex justify-content-center align-items-center">
    <div class="col-md-5">
        <div class="card">
            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->name }}">
            <div class="card-body">
                <h6 class="card-title">{{ $post->name }}</h6>
                <p class="card-text">{{ $post->kondisi }}</p>
                <div class="card-footer">
                    <div class="card-body1">
                        <p class="card-desc">{{ $post->detail }}</p>
                        <h5 class="card-title">RP {{ $post->harga }}</h5>
                        <a href="https://api.whatsapp.com/send?phone={{ $post->nomor_hp }}" class="btn btn-success mt-4">
                            <i class="bi bi-whatsapp"></i> Beli sekarang
                        </a>
                        {{-- berikan href ke WhatsApp diambil dari nomor --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection