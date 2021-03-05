<?php

namespace Modules\Consulting\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConsultingRequest extends Model
{

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\Consulting\Database\factories\ConsultingRequestFactory::new();
    }
}
