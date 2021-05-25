<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    public $timestamps = false;
    protected $table = 'categories';

    public function post()
    {
        return $this->belongsToMany('App\Models\Post','post_has_categories','categories_id','post_id');
    }
    public function post_has_categories()
    {
        return $this->hasMany('App\Models\PostCategory','categories_id','id');
    }
    
}
