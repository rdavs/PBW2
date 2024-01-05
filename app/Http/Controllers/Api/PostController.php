<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();

        return response()->json(['status' => 'success', 'data' => ['posts' => $posts]]);
    }

    public function show($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['status' => 'error', 'message' => 'Post not found'], 404);
        }

        return response()->json(['status' => 'success', 'data' => ['post' => $post]]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'detail' => 'required|string',
            'kategori' => 'required|string',
            'nomor_hp' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = '';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('public/images', $filename);
            $imagePath = 'images/' . $filename;
        }

        $post = new Post([
            'users_id' => auth()->id(),
            'name' => $request->input('name'),
            'harga' => $request->input('harga'),
            'detail' => $request->input('detail'),
            'kategori' => $request->input('kategori'),
            'nomor_hp' => $request->input('nomor_hp'),
            'kondisi' => $request->input('kondisi'),
            'image' => $imagePath,
        ]);

        $post->save();

        return response()->json(['status' => 'success', 'data' => ['post' => $post]]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['status' => 'error', 'message' => 'Post not found'], 404);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post->name = $request->name;
        $post->detail = $request->detail;

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $post->image);
            $path = $request->file('image')->store('public/images');
            $post->image = str_replace('public/', '', $path);
        }

        $post->save();

        return response()->json(['status' => 'success', 'data' => ['post' => $post]]);
    }

    public function destroy($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['status' => 'error', 'message' => 'Post not found'], 404);
        }

        Storage::delete('public/' . $post->image);
        $post->delete();

        return response()->json(['status' => 'success', 'message' => 'Post deleted successfully']);
    }
}
