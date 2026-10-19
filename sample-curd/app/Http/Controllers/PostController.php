<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::all();
        // $posts = Post::latest()->get(); // if you want to get latest data (desc)
        $posts = Post::latest()->paginate(12); // if you want to make paginate
        return view("posts.index",[
            "posts"=>$posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title'=>'required',
            'content'=>'required',
            'image'=>'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $post = [
            'title'=>$request->title,
            'content'=>$request->content,
            'image'=>$request->image
        ];
        Post::create($post);
        return redirect()->route('posts.index')->with('message','POST created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::findorfail($id);
        return view("posts.show",[
            "post"=>$post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("posts.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
