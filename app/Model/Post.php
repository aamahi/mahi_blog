<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'category_id',
        'details',
        'photo'
    ];

    public function category()
    {
        return $this->hasOne('App\Model\Category','id','category_id');
    }
}
