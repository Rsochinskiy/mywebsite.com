<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tag extends Model
{
   use Sluggable;

   protected $fillable = ['name'];

/**
   * Return the sluggable configuration array for this model.
   * @return array
*/
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function tags()
    {
       return $this->belongsToMany(Tag::class,  'post_tag');
    }


}