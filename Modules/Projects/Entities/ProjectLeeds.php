<?php

namespace Modules\Projects\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectLeeds extends Model
{
    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Projects\Database\factories\ProjectLeedsFactory::new();
    }
}
