<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{

     protected $table="branches";

     protected $fillable=['class','name','photo','location','email','description','phone'];
   
     public static function getAllBranch(){
        return  Branch::orderBy('id','ASC')->paginate(10);
    }
}
