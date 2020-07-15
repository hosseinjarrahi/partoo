<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getLinkAttribute()
    {
        return route('post.show',['post' => $this->id]);
    }
}
