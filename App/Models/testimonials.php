<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{

     protected $table="testimonials";

     protected $fillable=['class','title','full_name','photo','testimony'];
   
     public static function getAllTestimony(){
        return  Testimonials::orderBy('id','ASC')->paginate(10);
    }
}
