<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable=['heading','slug','status', 'short_description','thumbnail','is_parent','parent_id'];
    public function newsdetail(){
        return $this->hasMany('App\Models\NewsDetail','news_cat_id','id')->where('status','active');
    }

    public static function getNewsDetailByCategory($slug){
        return News::with('newsDetail')->where('slug',$slug)->first();
    }
}


