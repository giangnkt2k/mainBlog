<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    public $timestamps = false;
    protected $table = 'tags';

    public function post()
    {
        return $this->belongToMany('App\Models\Post','post_id','id');
    }
    public function post_has_tags()
    {
        return $this->hasMany('App\Models\PostTag','tags_id','id');
    }
}
