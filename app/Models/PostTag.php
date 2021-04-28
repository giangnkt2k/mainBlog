<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTags extends Model
{
    protected $table = "post_has_tags";
    protected $fillable = [
        'tags_id',
        'post_id',
    ];
    public function tags()
    {
        return $this->belongsTo('App\Models\Tags','tags_id','id');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post','post_id','id');
    }
}