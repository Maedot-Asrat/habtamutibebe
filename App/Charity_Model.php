<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charity_Model extends Model
{
    protected $table="charity";

     protected $fillable=['title','slug','summary','photo','status','added_by'];

     public static function getAllcharity(){
        return  Charity_Model::orderBy('id','DESC')->paginate(10);
    }

}


