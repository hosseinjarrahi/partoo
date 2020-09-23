<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    protected $guarded = ['id'];
    public $timestamps = false;

    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
