<?php

namespace Modules\SupportCenter\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactUs extends Model
{

    protected $fillable = [];
    
    protected static function newFactory()
    {
        return \Modules\SupportCenter\Database\factories\ContactUsFactory::new();
    }
}
