<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  $post= Post::all();
     $post=Post::orderBy('created_at','desc')->get();
    // return Post::where('title','post one')->get();
  //  $post=DB::select('SELECT * FROM post');

    return view ('posts.index')->with('post',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
      {
        $this->validate($request,[
          'title' => 'required',
          'contact' => 'required',
          'address' => 'required',
          'city' => 'required',
          'thana' => 'required',
          'road' => 'required',
          'cost' => 'required',
          'house_type' => 'required',
          'month' => 'required',
          'seat' => 'required',
          'overview' => 'required'

        ]);
        //create post
        $post=new Post;
        $post->title=$request->input('title');
        $post->contact=$request->input('contact');
        $post->address=$request->input('address');
        $post->city=$request->input('city');
        $post->thana=$request->input('thana');
        $post->road=$request->input('road');
        $post->cost=$request->input('cost');
        $post->house_type=$request->input('house_type');
        $post->month=$request->input('month');
        $post->seat=$request->input('seat');
        $post->overview=$request->input('overview');
        if($request->file('image')){
    		$profileimages=$request->file('image');
    		$filename=time().'.'. $profileimages->getClientOriginalExtension();
    		Image::make($profileimages)->resize(300,300)->save(public_path('upload/picture/'.$filename));
    		$post->user_id=auth()->user()->id;
    		$post->image=$filename;
    		$post->save();

    	}
        // $post->profile=$request->input('profile');
        //
        // $post->user_id=auth()->user()->id;
        // $post->save();
        return redirect('/post')->with('success','Post Created');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view ('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post=Post::find($id);
      return view('posts.edit')->with('post',$post);
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
      $this->validate($request,[
        'title' => 'required',
        'contact' => 'required',
        'address' => 'required',
        'city' => 'required',
        'thana' => 'required',
        'road' => 'required',
        'cost' => 'required',
        'house_type' => 'required',
        'month' => 'required',
        'seat' => 'required',
        'overview' => 'required',

      ]);
      //create post
      $post=new Post;
      $post->title=$request->input('title');
      $post->contact=$request->input('contact');
      $post->address=$request->input('address');
      $post->city=$request->input('city');
      $post->thana=$request->input('thana');
      $post->road=$request->input('road');
      $post->cost=$request->input('cost');
      $post->house_type=$request->input('house_type');
      $post->month=$request->input('month');
      $post->seat=$request->input('seat');
      $post->overview=$request->input('overview');
      if($request->file('image')){
      $profileimages=$request->file('image');
      $filename=time().'.'. $profileimages->getClientOriginalExtension();
      Image::make($profileimages)->resize(300,300)->save(public_path('upload/picture/'.$filename));
      $post->user_id=auth()->user()->id;
      $post->image=$filename;
      $post->save();

    }
      // $post->profile=$request->input('profile');
      //
      // $post->user_id=auth()->user()->id;
      // $post->save();
      return redirect('/post')->with('success','Post Created');
  }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post=Post::find($id);
       $post->delete();
       return redirect('/post')->with('success','Post delete');
    }
}
