<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\student\posts;
use Carbon\Carbon;
use Illuminate\Http\Request;

class postController extends Controller
{
    protected $uploadPath = "uploads/admin";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new posts();
        $fileName = strtotime(Carbon::now());
        if($request->file('image')){
            $fileName = $fileName.".".$request->file('image')->extension();
            $uploadPath = (public_path($this->uploadPath."/".$fileName));
            move_uploaded_file($request->file('image'), $uploadPath);
        }
        $post->image = $fileName;
        // dd($fileName);

        $post->post_title=$request->get('title');
        $post->post_author=$request->get('author');

        $post ->save();
        return redirect('show');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(posts $post)
    {
        $post = posts::all();
        return view('student.show', ['posts' =>$post]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(posts $post,$id)
    {
        $post = posts::find($id);
        return view('student.update', ['posts'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, posts $posts, $id)
    {
        $post = posts::find($id);
        $fileName = strtotime(Carbon::now());
        if($request->file('image')){
            $fileName = $fileName.".".$request->file('image')->extension();
            $uploadPath = (public_path($this->uploadPath."/".$fileName));
            move_uploaded_file($request->file('image'), $uploadPath);
        }
        $post->image = $fileName;
        $post ->post_title = $request->get('title');
        $post ->post_author = $request->get('author');
        $post ->save();
        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(posts $posts, $id)
    {
        $post = posts::find($id);
        $post ->delete();
        return redirect('show');
    }
}
