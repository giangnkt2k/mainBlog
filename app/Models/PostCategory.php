<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = "post_has_categories";
    protected $fillable = [
        'categories_id',
        'post_id',
    ];
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category','categories_id','id');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post','post_id','id');
    }
}