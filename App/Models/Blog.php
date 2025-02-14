<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=['headerphoto','title','slug','publish_date','description','video_link','photo','blogcat_id','child_blogcat_id','status'];


    public function blogcat_info(){
        return $this->hasOne('App\Models\Blogcategory','id','blogcat_id');
    }

    public function sub_blogcat_info(){
        return $this->hasOne('App\Models\Blogcategory','id','child_blogcat_id');
    }
    public static function getAllBlog(){
        return Blog::with(['blogcat_info'])->orderBy('id','DESC')->paginate(10);
    }


    public static function countActiveBlog(){
        $data=Blog::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
