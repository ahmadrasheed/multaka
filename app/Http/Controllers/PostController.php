<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        //dd($posts);
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*  $validatedData = $request->validate([
            'title' => 'required',
           // 'amount' => 'required|numeric',
           'image' => 'required',
            'body' => 'required',
        
        ]); */
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
 
        ]);
        /* to handel the outside image and move it to the public/article-img/  path   */
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('articles-img'), $imageName);
        /*              */
        
        $detail=$request->input('body');
        //$image=$request->input('image');
        $title=$request->input('title');
        $short=$request->input('short');
 
            /* this is inside images which is necessary for uploading images inside the textarea using summernote editor  */
        //$dom->loadHTML(mb_convert_encoding($profile, 'HTML-ENTITIES', 'UTF-8'));
        $dom = new \DomDocument();
        $dom->loadHTML(mb_convert_encoding($detail, 'HTML-ENTITIES', 'UTF-8'));   
        $images = $dom->getElementsByTagName('img');
 
                foreach($images as $k => $img){
        
                    $data = $img->getAttribute('src');
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $inside_image_name=  time().$k.'.png';
                    $inside_image_path = public_path('upload/') . $inside_image_name;
                    file_put_contents($inside_image_path , $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $inside_image_name);

                }

        
        $post = new Post;
        

        $post->body=$detail = @$dom->saveHTML();
        $post->title=$title;
        $post->short=$short;
        $post->image=$imageName; // this is the article feature image, this is not inside the article.
        $post->inside_image=$inside_image_name;
        $post->save();
        //Post::create($request->all());

        return redirect('/posts');
// ******************* please follow this tutorial:https://www.kerneldev.com/2018/01/11/using-summernote-wysiwyg-editor-with-laravel/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $post=Post::findOrFail($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('posts.edit',compact('post'));
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
        $request->validate([
            'title'=>'required',
            'image'=>'required',
            'body'=>'required'
        ]);

        $post = Post::find($id);
        $post->title =  $request->get('title');
        $post->image = $request->get('image');
        $post->body = $request->get('body');
        
        $post->save();

        return redirect('/posts')->with('success', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        File::delete(public_path('articles-img/').$post->image);
        File::delete(public_path('upload/').$post->inside_image);
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted!');
        
        // $image_name= "/upload/" . time().$k.'.png';
        // $path = public_path() . $image_name;
        // file_put_contents($path, $data);
        


    }
}
