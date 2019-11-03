<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['name','mobile','email','date','package_id','noofvisitors','approve','noofchildren'];

    public function package(){
        return $this->belongsTo(Package::class,'package_id','id');
    }
}
