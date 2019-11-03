<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $fillable=['user_id','title','image','shortDescription','content','tags','date','blog_facebook','blog_twitter','blog_linkedin','quote'];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
