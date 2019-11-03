<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'title',
        'shortDescription',
        'content',
        'duration',
        'price',
        'returnDate',
        'departureDate',
        'noofpeople',
        'location',
        'category_id',
        'itineraries',
        'discount',
        'showinhome',
        'image',
    ];

    public function category(){
        return $this->belongsTo(PackageCategory::class,'category_id','id');
    }
}
