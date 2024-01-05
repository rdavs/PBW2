<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage; // Make sure to import your Post model

class PostController extends Controller
{
    public function create()
    {
        return view('tambahPost'); // Replace 'posts.create' with your actual view file
    }

    public function index()
{
    // Retrieve all posts from the database ordered by the latest first
    $posts = Post::latest()->get();

    // Pass the posts data to the view
    return view('beranda2', ['posts' => $posts]);
}



public function category($category)
    {
        $posts = Post::where('kategori', $category)->get();

        return view('category', compact('posts', 'category'));
    }


    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $posts = Post::where('name', 'like', '%' . $keyword . '%')->get();

        return view('searchResult', compact('posts'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('editPost', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = Post::findOrFail($id);

        $post->name = $request->name;
        $post->detail = $request->detail;

        if ($request->hasFile('image')) {
            // Delete old image
            Storage::delete('public/' . $post->image);

            // Store new image
            $path = $request->file('image')->store('public/images');
            $post->image = str_replace('public/', '', $path);
        }

        $post->save();

        return redirect('/daftarPost')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Delete the associated image
        Storage::delete('public/' . $post->image);

        // Delete the post
        $post->delete();

        return redirect('/daftarPost')->with('success', 'Post deleted successfully.');
    }

    
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'detail' => 'required|string',
        'kategori' => 'required|string', // Add validation for kategori
        'nomor_hp' => 'required|string', // Add validation for nomor_hp
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imagePath = ''; // Initialize $imagePath

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('public/images', $filename);
        $imagePath = 'images/' . $filename; // Assign the image path to $imagePath
    }

     // Get the currently authenticated user's ID
    //  $users_id = Auth::id();

     // Create a new post with user ID
     $post = new Post([
         'users_id' => auth()->id(),
         'name' => $request->input('name'),
            'harga' => $request->input('harga'),
            'detail' => $request->input('detail'),
            'kategori' => $request->input('kategori'),
            'nomor_hp' => $request->input('nomor_hp'),
            'kondisi' => $request->input('kondisi'), // Add kondisi to the data
            'image' => $imagePath,
    ]);
 

    // Save the post to the database
    $post->save();

    return redirect('/')->with('success', 'Post created successfully!');
}



public function show($id)
{
    // Retrieve the post details based on the provided $id
    $post = Post::find($id);

    // Return the view with the post details
    return view('infoCard', ['post' => $post]);
}

}
