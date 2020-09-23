<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Post extends Model
{
    use HasTrixRichText;

    protected $guarded = ['id'];

    public function getLinkAttribute()
    {
        return route('show.post',['post' => $this->id]);
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'model','categories_models');
    }
}
