<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blog;
use App\Models\Blogcategory;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Settings;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs=Blog::getAllBlog();
        // return $posts;
        return view('backend.blog.index')->with('blogs',$blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogcategory=Blogcategory::get();
        return view('backend.blog.create')->with('blogcategories',$blogcategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'headerphoto'=>'string|nullable',
            'title'=>'string|required',
            'description'=>'string|nullable',
            'video_link'=>'string|nullable',
            'photo'=>'string|nullable',
            'blogcat_id'=>'nullable|exists:blogcategories,id',
            'child_blogcat_id'=>'nullable|exists:blogcategories,id',
            'publish_date' => 'date|required', 
            'status'=>'required|in:active,inactive'
        ]);

        $data=$request->all();

        $slug=Str::slug($request->title);
        $count=Blog::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;

        // return $data;

        $status=Blog::create($data);
        if($status){
            request()->session()->flash('success','Post Successfully added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('blog.index');
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
        $blogs=Blog::findOrFail($id);
        $blogcategory=Blogcategory::where('is_parent',1)->get();
        return view('backend.blog.edit')->with('blogs',$blogs)->with('blogcategories',$blogcategory);
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
        $blogs=Blog::findOrFail($id);
         // return $request->all();
         $this->validate($request,[
           
            'headerphoto'=>'string|nullable',
            'title'=>'string|required',
            'description'=>'string|nullable',
            'video_link'=>'string|nullable',
            'photo'=>'string|nullable',
            'blogcat_id'=>'nullable|exists:blogcategories,id',

            'child_blogcat_id'=>'nullable|exists:blogcategories,id',   
            'publish_date' => 'date|required', 
            'status'=>'required|in:active,inactive'
        ]);

        $data=$request->all();
        $data['is_parent']=$request->input('is_parent',0);
        // return $data;

        $status=$blogs->fill($data)->save();
        if($status){
            request()->session()->flash('success','blog Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::findOrFail($id);
        $status=$blog->delete();
        
        if($status){
            request()->session()->flash('success','Blog successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting product');
        }
        return redirect()->route('blog.index');
    }
    public function showBlogDetails($blogcategory_id, $blog_id)
{
    $blogcategory = Blogcategory::find($blogcategory_id);
    $blog = Blog::find($blog_id);
    $logos= Logo::all();
    $banners= Banner::all();
    $settings= Settings::all();
    // Pass the blogcategory and blog to the view
    return view('frontend.pages.blogdetail', compact('blogcategory', 'blog', 'logos','banners','settings'));
}

}
