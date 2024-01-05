<!-- resources/views/dashboard.blade.php -->

@extends('layouts.main')

@section('container')
<div class="container mt-4">
    <h2>Your Posts</h2>

    @if ($userPosts->isNotEmpty())
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Detail</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($userPosts as $post)
            <tr>
                <td>{{ $post->name }}</td>
                <td>{{ $post->detail }}</td>
                <td>
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->name }}" style="max-width: 100px;">
                </td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-primary mr-2">Edit</a>

                        <form action="{{ route('post.destroy', ['id' => $post->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>You have no posts.</p>
    @endif
</div>
@endsection