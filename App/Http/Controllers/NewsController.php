<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all news
        $news = News::all();
        return view('backend.news.index')->with('news', $news);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_news=News::orderBy('heading','ASC')->get();
        return view('backend.news.create')->with('parent_news',$parent_news);
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
            'heading'=>'string|required',
            'short_description'=>'string|nullable',
            'thumbnail'=>'string|nullable',
            'status'=>'required|in:active,inactive',
            'is_parent'=>'sometimes|in:1',
            'parent_id'=>'nullable|exists:news,id',
        ]);
        $data= $request->all();
        $slug=Str::slug($request->heading);
        $count=News::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        $data['is_parent']=$request->input('is_parent',0);
        // return $data;   
        $status=News::create($data);
        if($status){
            request()->session()->flash('success','News successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('news.index');


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
        $parent_news=News::where('is_parent',1)->get();
        $news=News::findOrFail($id);
        return view('backend.news.edit')->with('news',$news)->with('parent_news',$parent_news);
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
        // return $request->all();
        $news=News::findOrFail($id);
        $this->validate($request,[
            'heading'=>'string|required',
            'short_description'=>'string|nullable',
            'thumbnail'=>'string|nullable',
            'status'=>'required|in:active,inactive',
            'is_parent'=>'sometimes|in:1',
            'parent_id'=>'nullable|exists:news,id',
        ]);
        $data= $request->all();
        $data['is_parent']=$request->input('is_parent',0);
        // return $data;
        $status=$news->fill($data)->save();
        if($status){
            request()->session()->flash('success','News successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred, Please try again!');
        }
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news=News::findOrFail($id);
        $child_news_id=News::where('parent_id',$id)->pluck('id');
        // return $child_news_id;
        $status=$news->delete();
        
        if($status){
            if(count($child_news_id)>0){
                News::shiftChild($child_news_id);
            }
            request()->session()->flash('success','News successfully deleted');
        }
        else{
            request()->session()->flash('error','Error while deleting news');
        }
        return redirect()->route('news.index');
    }

    public function getChildByParent(Request $request){
        // return $request->all();
        $news=News::findOrFail($request->id);
        $child_news=News::getChildByParentID($request->id);
        // return $child_news;
        if(count($child_news)<=0){
            return response()->json(['status'=>false,'msg'=>'','data'=>null]);
        }
        else{
            return response()->json(['status'=>true,'msg'=>'','data'=>$child_news]);
        }
    }
}
