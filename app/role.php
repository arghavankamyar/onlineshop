<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class role extends Model
{
    public function users()
    {
        return $this->hasMany(user::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(permission::class);
    }
}
