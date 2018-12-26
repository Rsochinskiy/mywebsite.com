<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content', 'is_active', 'category_id'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tag');
    }
   
}
