<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'picture',
    ];
    protected $hidden = ['pivot'];
    public function tag()
    {
        return $this->belongsToMany('App\Models\Tag','post_has_tags','post_id','tags_id');
    }
    public function category()
    {
        return $this->belongsToMany('App\Models\Category','post_has_categories','post_id','categories_id');
    }
    public function post_has_tags()
    {
        return $this->hasMany('App\Models\PostTag','post_id','id');
    }
    public function post_has_categories()
    {
        return $this->hasMany('App\Models\PostCategory','post_id','id');
    }
}
