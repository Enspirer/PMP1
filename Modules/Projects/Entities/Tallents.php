<?php

namespace Modules\Projects\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tallents extends Model
{
    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Projects\Database\factories\TallentsFactory::new();
    }
}
