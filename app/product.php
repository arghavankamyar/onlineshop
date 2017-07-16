<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['product_name','category_id','brand_id','price','description','product_img','stock','scent','season'];

    public function brand()
    {
        return $this->belongsTo(brand::class);
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function comments()
    {
        return $this->hasMany(comment::class);
    }
}
