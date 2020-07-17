<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];

    public function rooms()
    {
        return $this->morphedByMany(Room::class, 'model','categories_models');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
