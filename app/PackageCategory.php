<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Package;
class PackageCategory extends Model
{
    protected $fillable = ['name'];
    public function getTour(){
        return $this->hasMany(Package::class,'category_id','id');
    }
}
