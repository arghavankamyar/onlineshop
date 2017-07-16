<?php

namespace App;
use App\product;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $fillable = ['brand_name'] ;
    public function products()
    {
        return $this->hasMany(product::class)  ;
    }
}
