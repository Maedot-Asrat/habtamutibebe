<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoursesModel extends Model
{
    protected $table="courses";

    protected $fillable=['title','course_type','photo','status','price','slug'];


    public static function getcourses(){
        return  CoursesModel::orderBy('id','DESC')->paginate(10);
    }
}
