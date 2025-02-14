<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;

    protected $table="doctors";

    protected $fillable=['fullname','title','slug','summary','photo','status','added_by'];

    public static function getAllDoctors(){
        return  Doctors::orderBy('id','DESC')->paginate(10);
    }
}
