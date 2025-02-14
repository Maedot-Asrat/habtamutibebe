<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $fillable=['name','message','email','date','time','phone','read_at','service'];
}
