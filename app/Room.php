<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $with = ['categories'];
    protected $guarded = ['id'];
    public function categories()
    {
        return $this->morphToMany(Category::class, 'model','categories_models');
    }
}
