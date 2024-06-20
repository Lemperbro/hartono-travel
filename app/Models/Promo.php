<?php

namespace App\Models;

use App\Traits\HasCarbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory, HasCarbon;

    protected $guarded = [
        'id'
    ];
}
