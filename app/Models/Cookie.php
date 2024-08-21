<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cookie extends Model
{
    protected $fillable = ['name', 'quantity', 'production_date'];

    protected $casts = [
        'production_date' => 'date',
    ];
}
