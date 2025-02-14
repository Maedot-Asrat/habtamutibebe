<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\NewsDetail;
use App\Models\Logo;
use App\Models\Banner;
use App\Models\Settings;

class NewsDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newsdetails=NewsDetail::getAllNewsdetail();
        // return $posts;
        return view('backend.newsdetail.index')->with('newsdetails',$newsdetails);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news=News::get();
        return view('backend.newsdetail.create')->with('news',$news);
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
            'sub_heading'=>'string|required',
            'detail'=>'string|nullable',
            'video_link'=>'string|nullable',
            'photo1'=>'string|nullable',
            'news_id'=>'nullable|exists:news,id',
            'child_news_id'=>'nullable|exists:news,id',
            'publish_date' => 'date|required', 
            'status'=>'required|in:active,inactive'
        ]);

        $data=$request->all();

        $slug=Str::slug($request->sub_heading);
        $count=NewsDetail::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;

        // return $data;

        $status=NewsDetail::create($data);
        if($status){
            request()->session()->flash('success','Post Successfully added');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('newsdetail.index');
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
        $newsdetails=NewsDetail::findOrFail($id);
        $news=News::where('is_parent',1)->get();
        return view('backend.newsdetail.edit')->with('newsdetails',$newsdetails)->with('news',$news);
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
        $newsdetails=NewsDetail::findOrFail($id);
         // return $request->all();
         $this->validate($request,[
           
            'headerphoto'=>'string|nullable',
            'sub_heading'=>'string|required',
            'detail'=>'string|nullable',
            'video_link'=>'string|nullable',
            'photo1'=>'string|nullable',
           'news_id'=>'nullable|exists:news,id',
            'child_news_id'=>'nullable|exists:news,id',   
            'publish_date' => 'date|required', 
            'status'=>'required|in:active,inactive'
        ]);

        $data=$request->all();
        $data['is_parent']=$request->input('is_parent',0);
        // return $data;

        $status=$newsdetails->fill($data)->save();
        if($status){
            request()->session()->flash('success','NewsDetail Successfully updated');
        }
        else{
            request()->session()->flash('error','Please try again!!');
        }
        return redirect()->route('newsdetail.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsdetail=NewsDetail::findOrFail($id);
        $status=$newsdetail->delete();
        
        if($status){
            request()->session()->flash('success','News detail successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting product');
        }
        return redirect()->route('newsdetail.index');
    }
    public function showNewsDetails($news_id, $newsdetail_id)
{
    $news = News::find($news_id);
    $newsdetail = NewsDetail::find($newsdetail_id);
    $logos= Logo::all();
    $banners= Banner::all();
    $settings= Settings::all();
    // Pass the news and NewsDetail to the view
    return view('frontend.pages.newsdetail', compact('news', 'newsdetail', 'logos','banners','settings'));
}

}
