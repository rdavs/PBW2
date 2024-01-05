@extends('layouts.main')

@section('container')
<div class="container mt-4">
    <h2>Edit Post</h2>

    <form method="POST" action="{{ route('post.update', ['id' => $post->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $post->name }}" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $post->harga }}" required>
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">Detail</label>
            <textarea class="form-control" id="detail" name="detail" rows="3" required>{{ $post->detail }}</textarea>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select" id="kategori" name="kategori" required>
                <option value="Food" {{ $post->kategori == 'Food' ? 'selected' : '' }}>Food</option>
                <option value="Beverage" {{ $post->kategori == 'Beverage' ? 'selected' : '' }}>Beverage</option>
                <option value="Cosmetic" {{ $post->kategori == 'Cosmetic' ? 'selected' : '' }}>Cosmetic</option>
                <option value="Vehicle" {{ $post->kategori == 'Vehicle' ? 'selected' : '' }}>Vehicle</option>
                <option value="Fashion" {{ $post->kategori == 'Fashion' ? 'selected' : '' }}>Fashion</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nomor_hp" class="form-label">Nomor HP</label>
            <input type="text" class="form-control" id="nomor_hp" name="nomor_hp" value="{{ $post->nomor_hp }}" required>
        </div>
        <div class="mb-3">
            <label for="kondisi" class="form-label">Kondisi</label>
            <select class="form-select" id="kondisi" name="kondisi" required>
                <option value="Baru" {{ $post->kondisi == 'Baru' ? 'selected' : '' }}>Baru</option>
                <option value="Bekas" {{ $post->kondisi == 'Bekas' ? 'selected' : '' }}>Bekas</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection