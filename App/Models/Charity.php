<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    protected $table="charity";

    protected $fillable=['title','slug','summary','photo','status','added_by'];

    public static function getAllcharity(){
        return  Charity::orderBy('id','DESC')->paginate(10);
    }
}
