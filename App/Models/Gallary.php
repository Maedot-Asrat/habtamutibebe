<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallary extends Model
{
    protected $table="gallaries";

    protected $fillable=['title','slug','summary','photo','status','added_by'];


    public static function getAllGallary(){
        return  Gallary::orderBy('id','DESC')->paginate(10);
    }

}
