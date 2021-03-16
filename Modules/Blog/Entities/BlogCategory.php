<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogCategory extends Model
{


    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\BlogCategoryFactory::new();
    }
}
