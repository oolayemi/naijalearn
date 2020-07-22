<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }


    public function store(CreatePostRequest $request)
    {
        //return $request->all();
//
//        $this->validate($request, [
//           'title'=>'required|max:4'
//        ]);

        Post::create($request->all());
        return redirect('/posts');

    }


    public function show($id)
    {
        //
        $post = Post::findOrFail($id);

        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());
        return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('/posts');
    }

    public function showView()
    {
        $people = ['Femi', 'Shola', 'Samuel', 'Samson', 'Camp'];
        return view("contact", compact('people'));
    }

    public function show_post($id)
    {
        return view("post")->with('id', $id);
    }
}
