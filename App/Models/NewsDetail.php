<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsDetail extends Model
{
    protected $table = 'newsdetails';
    protected $fillable=['headerphoto','sub_heading','slug','publish_date','detail','video_link','photo1','news_id','child_news_id','status'];


    public function news_info(){
        return $this->hasOne('App\Models\News','id','news_id');
    }

    public function sub_news_info(){
        return $this->hasOne('App\Models\News','id','child_news_id');
    }
    public static function getAllNewsDetail(){
        return NewsDetail::with(['news_info'])->orderBy('id','DESC')->paginate(10);
    }
   

    public static function countActiveNews(){
        $data=NewsDetail::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
