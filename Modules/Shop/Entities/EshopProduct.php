<?php

namespace Modules\Shop\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EshopProduct extends Model
{
    
    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Shop\Database\factories\EshopProductFactory::new();
    }
}
