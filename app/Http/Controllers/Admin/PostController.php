<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;
use App\post;
use Image;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view('admin.post.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = category::all();
        return view('admin.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request, [
            'title' => 'required|string|max:70',
            'image' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalName();
            $location = public_path('images/' . $filename);
            Image::make($image)->save($location);
        }

        $post = new post;
        $post->title = $request->title;
        $post->excerpt = substr(strip_tags($post->body),0,500);
        $post->body = $request->body;
        $post->slug = $request->slug; 
        $post->image = $filename;
        $post->user_id = Auth::user()->id;
        if ($request->has('save')) {
            // for draft
            $post->status = 0;
            $message = 'Post saved successfully';
        } else {
            // for posts
            $post->status = 1;
            $post->count += $post->count;
            $message = 'Post published successfully';
        }

        $post->save();
        $post->categories()->sync($request->categories );

        return redirect()->route('post.edit', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::with('categories')->where('id', $id)->first();
        $categories = category::all();
        return view('admin.post.edit', compact('categories','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request, [
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->save($location);
        }

        $post = post::find($id);
        //$post->excerpt = strlen(strip_tags($post->body), 300);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        //$post->status = $request->status;
        //$post->admin_id = Auth::user()->id;
        $post ->categories()->sync($request->categories );
        $post ->save();

        return redirect(route('post.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }
}
