<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    public $timestamps = false;
    protected $table = 'categories';

    public function post()
    {
        return $this->belongToMany('App\Models\Post','post_id','id');
    }
    public function post_has_categories()
    {
        return $this->hasMany('App\Models\PostCategories','categories_id','id');
    }
}
